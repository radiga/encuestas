<?php namespace Begar\Encuestas\Controladores;

use Begar\_Controladores\BegarController;


use Illuminate\Support\Facades\DB;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use Begar\Encuestas\Modelos\Localizaciones;
use Illuminate\Support\Facades\Session;

class localizacionesController extends BegarController {


//  $localizacion_options = localizaciones::lists('nombre', 'id');


    public function Index()
    {

        //$localizaciones = Localizaciones::All();

        $localizaciones = DB::table('enc_localizaciones')
            ->where('id_empresa', '=', Session::get('id_empresa'))
            ->get();


        return View('localizaciones.index', compact('localizaciones'));
    }

    public function getEdit($id = null)
    {
        $localizaciones = Localizaciones::find($id);
        return View('localizaciones/edit', compact('localizaciones'));
    }


    public function postEdit($id = null)
    {
        $rules = array(
            'nombre' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/localizaciones/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $localizacion = localizaciones::find($id);
            $localizacion->nombre = Input::get('nombre');

            if ($localizacion->save()) {
                // Redirect to the group page
                return Redirect::route('localizaciones')->with('success', Lang::get('localizaciones/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/localizacion', $id)->with('error', Lang::get('localizaciones/message.error.update'));
            }

        }
    }


    public function getCreate()
    {
        // Show the page
        return View('localizaciones/create');
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


        $localizacion = new localizaciones;
        $localizacion->nombre = Input::get('nombre');

        $localizacion->id_empresa = Session::get('id_empresa');


        $localizacion->save();


        if ($localizacion->save()) {
            // Redirect to the new group page
            return Redirect::route('localizaciones')->with('success', Lang::get('localizaciones/message.success.create'));
        }



    }


    public function getModalDelete($id = null)
    {
        $model = 'localizaciones';
        $confirm_route = $error = null;
        try {
            // Get group information
            $localizacion =  localizaciones::find($id);

            $confirm_route =  route('delete/localizacion',['id'=>$localizacion->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (Exception $e)  {

            $error = Lang::get('localizaciones/message.localizacion_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function getDelete($id = null)
    {
        try {
            // Get group information
            $localizacion = localizaciones::find($id);

            // Delete the group
            $localizacion->delete();

            // Redirect to the group management page
            return Redirect::route('localizaciones')->with('success', Lang::get('localizaciones/message.success.delete'));
        } catch (Exception $e) {
            // Redirect to the group management page
            return Redirect::route('localizaciones')->with('error', Lang::get('localizaciones/message.localizacion_not_found', compact('id')));
        }
    }






}

?>