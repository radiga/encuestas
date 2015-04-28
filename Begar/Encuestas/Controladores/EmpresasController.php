<?php namespace Begar\Encuestas\Controladores;

use Begar\_Controladores\BegarController;

use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use Begar\Encuestas\Modelos\Empresas;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class EmpresasController extends BegarController {


//  $empresa_options = Empresas::lists('nombre', 'id');


  public function Index()
  {

      $empresas = Empresas::All();

      return View('empresas.index', compact('empresas'));
  }

    public function getEdit($id = null)
    {
       $empresas = Empresas::find($id);
        return View('empresas.edit', compact('empresas'));
    }


    public function postEdit($id = null)
    {
        $rules = array(
            'nombre' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/empresas/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $empresa = Empresas::find($id);
            $empresa->nombre = Input::get('nombre');

            if ($empresa->save()) {
                // Redirect to the group page
                return Redirect::route('empresas')->with('success', Lang::get('empresas/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/empresa', $id)->with('error', Lang::get('empresas/message.error.update'));
            }

        }
    }


    public function getCreate()
    {
        // Show the page
        return View('empresas/create');
    }

    public function postCreate()
    {

        // declaramos las reglas de validación
        $rules = array(
            'nombre' => 'required',
        );


        // Validamos que se ha metido el nombre
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }


            $empresa = new Empresas;
            $empresa->nombre = Input::get('nombre');
            $empresa->save();


            if ($empresa->save()) {
                // Redirect to the new group page
                return Redirect::route('empresas')->with('success', Lang::get('empresas/message.success.create'));
            }



      }


    public function getModalDelete($id = null)
    {
        $model = 'empresas';
        $confirm_route = $error = null;
        try {
            // Get group information
            $empresa =  Empresas::find($id);

            $confirm_route =  route('delete/empresa',['id'=>$empresa->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (Exception $e)  {

            $error = Lang::get('empresas/message.empresa_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function getDelete($id = null)
    {
        try {
            // Get group information
            $empresa = Empresas::find($id);

            // Delete the group
            $empresa->delete();

            // Redirect to the group management page
            return Redirect::route('empresas')->with('success', Lang::get('empresas/message.success.delete'));
        } catch (Exception $e) {
            // Redirect to the group management page
            return Redirect::route('empresas')->with('error', Lang::get('empresas/message.empresa_not_found', compact('id')));
        }
    }

    public function cambioempresa()
    {

        $empresas = Empresas::All();
        return View('empresas.cambio', compact('empresas'));
    }


    public function seleccionarempresa()
    {


        Session::put('id_empresa', Input::get('empresa'));

        $nombre_empresa = DB::table('enc_empresas')->where('id','=', Input::get('empresa'))->pluck('nombre');

        Session::put('nombre_empresa',$nombre_empresa);


        $empresas = Empresas::All();
        return View('empresas.cambio', compact('empresas'));


    }



  
}

?>