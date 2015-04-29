<?php namespace Begar\Encuestas\Controladores;

use Begar\_Controladores\BegarController;


use Illuminate\Support\Facades\DB;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use Begar\Encuestas\Modelos\encuestas;
use Illuminate\Support\Facades\Session;

class encuestasController extends BegarController {


//  $localizacion_options = encuestas::lists('nombre', 'id');


    public function Index()
    {

        //$encuestas = encuestas::All();

        $encuestas = DB::table('enc_encuestas')
            ->where('id_empresa', '=', Session::get('id_empresa'))
            ->get();


        return View('encuestas.index', compact('encuestas'));
    }

    public function getEdit($id = null)
    {
        $encuestas = encuestas::find($id);
        return View('encuestas/edit', compact('encuestas'));
    }


    public function postEdit($id = null)
    {
        $rules = array(
            'titulo' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/encuestas/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $encuestas = encuestas::find($id);

            $encuestas->titulo = Input::get('titulo');
            $encuestas->descripcion = Input::get('descripcion');
            $encuestas->activa = Input::get('activa');
            $encuestas->anonima = Input::get('anonima');
            $encuestas->fecha_inicio = Input::get('fecha_inicio');
            $encuestas->fecha_fin = Input::get('fecha_fin');

            $encuestas->url = Input::get('url');


            if ($encuestas->save()) {
                // Redirect to the group page
                return Redirect::route('encuestas')->with('success', Lang::get('encuestas/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/encuesta', $id)->with('error', Lang::get('encuestas/message.error.update'));
            }

        }
    }


    public function getCreate()
    {
        // Show the page
        return View('encuestas/create');
    }

    public function postCreate()
    {

        // declaramos las reglas de validación
        $rules = array(
            'titulo' => 'required',
        );


        // Validamos que se ha metido el nombre
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }


        $encuestas = new encuestas;
        $encuestas->titulo = Input::get('titulo');

        $encuestas->id_empresa = Session::get('id_empresa');

        $encuestas->descripcion = Input::get('descripcion');

        $encuestas->url = Input::get('url');
        $encuestas->activa = Input::get('activa');
        $encuestas->anonima = Input::get('anonima');

        $encuestas->fecha_inicio = Input::get('fecha_inicio');
        $encuestas->fecha_fin = Input::get('fecha_fin');



        $encuestas->save();


        if ($encuestas->save()) {
            // Redirect to the new group page
            return Redirect::route('encuestas')->with('success', Lang::get('encuestas/message.success.create'));
        }



    }


    public function getModalDelete($id = null)
    {
        $model = 'encuestas';
        $confirm_route = $error = null;
        try {
            // Get group information
            $encuestas =  encuestas::find($id);

            $confirm_route =  route('delete/encuesta',['id'=>$encuestas->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (Exception $e)  {

            $error = Lang::get('encuestas/message.localizacion_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function getDelete($id = null)
    {
        try {
            // Get group information
            $encuestas = encuestas::find($id);

            // Delete the group
            $encuestas->delete();

            // Redirect to the group management page
            return Redirect::route('encuestas')->with('success', Lang::get('encuestas/message.success.delete'));
        } catch (Exception $e) {
            // Redirect to the group management page
            return Redirect::route('encuestas')->with('error', Lang::get('encuestas/message.localizacion_not_found', compact('id')));
        }
    }

    public function verSecciones($id_encuesta = null)
    {


       $secciones = DB::table('enc_encuestas_secciones')
            ->where('id_encuesta', '=', $id_encuesta)
            ->get();

        return View('secciones/index', compact('secciones'));


    }


    public function verPreguntas($id_encuesta = null)
    {

      /*
        $preguntas = DB::table('enc_encuestas_preguntas')
            ->where('id_encuesta', '=', $id_encuesta)
            ->get();

        return View('preguntas/index', compact('preguntas'));*/

        echo 'VER PREGUNTAS';
    }




}

?>