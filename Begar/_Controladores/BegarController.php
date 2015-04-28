<?php namespace Begar\_Controladores;


use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Sentry;
use Session;
use Cartalyst\Sentry\Users\LoginRequiredException;
use Cartalyst\Sentry\Users\PasswordRequiredException;
use Cartalyst\Sentry\Users\UserExistsException;
use Cartalyst\Sentry\Users\UserNotFoundException;
use View;

use App\Http\Controllers\Controller;

use Begar\Encuestas\Modelos\Empresas;
use App\Http\Controllers\JoshController;


class BegarController extends JoshController {


    public function showHome()
    {

        //Colocamos en nuestras variables de sesion la empresa 1 si esta sin definir.

        if (Session::get('id_empresa') == null) {
            Session::put('id_empresa', 1);
            $nombre_empresa = DB::table('enc_empresas')->where('id', '=', 1)->pluck('nombre');
            Session::put('nombre_empresa', $nombre_empresa);
        }


        $empresas = Empresas::lists('nombre', 'id');

    	if(Sentry::check())
			return View('index', compact('empresas'));
		else
			return Redirect::to('admin/signin')->with('error', 'You must be logged in!');
    }


}