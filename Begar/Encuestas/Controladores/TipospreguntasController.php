<?php namespace Begar\Encuestas\Controladores;

use App\Http\Controllers\BegarController;

use Illuminate\Support\Facades\DB;
use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use Begar\Encuestas\Modelos\Tipos_preguntas;


class tipospreguntasController extends BegarController {



    public function Index()
    {

        $tipospreguntas = tipos_preguntas::All();


        return View('tipospreguntas.index', compact('tipospreguntas'));
    }

    public function getEdit($id = null)
    {
        $tipospreguntas = tipos_preguntas::find($id);
        return View('tipospreguntas/edit', compact('tipospreguntas'));
    }


    public function postEdit($id = null)
    {
        $rules = array(
            'tipo' => 'required',
            'nombre' => 'required',
            'estilo' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/tipospreguntas/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $tipospreguntas = tipos_preguntas::find($id);

            $tipospreguntas->tipo = Input::get('tipo');
            $tipospreguntas->nombre = Input::get('nombre');
            $tipospreguntas->estilo = Input::get('estilo');


            if ($tipospreguntas->save()) {
                // Redirect to the group page
                return Redirect::route('tipospreguntas')->with('success', Lang::get('tipospreguntas/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/encuesta', $id)->with('error', Lang::get('tipospreguntas/message.error.update'));
            }

        }
    }


    public function getCreate()
    {
        // Show the page
        return View('tipospreguntas/create');
    }

    public function postCreate()
    {

        // declaramos las reglas de validación
        $rules = array(
            'tipo' => 'required',
            'nombre' => 'required',
            'estilo' => 'required',
        );



        // Validamos que se ha metido el nombre
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }


        $tipospreguntas = new tipos_preguntas;
        $tipospreguntas->tipo = Input::get('tipo');
        $tipospreguntas->nombre = Input::get('nombre');
        $tipospreguntas->estilo = Input::get('estilo');


        $tipospreguntas->save();


        if ($tipospreguntas->save()) {
            // Redirect to the new group page
            return Redirect::route('tipospreguntas')->with('success', Lang::get('tipospreguntas/message.success.create'));
        }



    }


    public function getModalDelete($id = null)
    {
        $model = 'tipospreguntas';
        $confirm_route = $error = null;
        try {
            // Get group information
            $tipospreguntas =  tipos_preguntas::find($id);

            $confirm_route =  route('delete/tipospregunta',['id'=>$tipospreguntas->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (Exception $e)  {

            $error = Lang::get('tipospreguntas/message.localizacion_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function getDelete($id = null)
    {
        try {
            // Get group information
            $tipospreguntas = tipos_preguntas::find($id);

            // Delete the group
            $tipospreguntas->delete();

            // Redirect to the group management page
            return Redirect::route('tipospreguntas')->with('success', Lang::get('tipospreguntas/message.success.delete'));
        } catch (Exception $e) {
            // Redirect to the group management page
            return Redirect::route('tipospreguntas')->with('error', Lang::get('tipospreguntas/message.localizacion_not_found', compact('id')));
        }
    }





}

?>