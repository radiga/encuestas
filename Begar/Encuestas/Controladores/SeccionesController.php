<?php namespace Begar\Encuestas\Controladores;

use Begar\_Controladores\BegarController;



use Illuminate\Support\Facades\DB;

use Validator;
use Input;
use Redirect;
use Lang;
use URL;

use Begar\Encuestas\Modelos\Encuestas_secciones;

use Begar\Encuestas\Modelos\encuestas;

class SeccionesController extends BegarController {


//  $localizacion_options = encuestas::lists('nombre', 'id');


 public function Index($id_encuesta = null)
  {

      $encuestas = encuestas::find($id_encuesta);

      // nos quedamos con las secciones de esa encuesta
      $secciones = Encuestas_secciones::where('id_encuesta', '=', $id_encuesta)->get();

      //$secciones = Encuestas_secciones::All();
      // Pasamos las secciones y los modelos a la vista
      return View('secciones/index', compact('secciones','encuestas'));

  }


    public function getEdit($id = null)
    {
        $secciones = Encuestas_secciones::find($id);

        $id_encuesta = $secciones->id_encuesta;

        $encuestas = Encuestas::where('id', '=',$id_encuesta )->get();

        return View('secciones/edit', compact('secciones', 'encuestas'));
    }


    public function postEdit($id = null)
    {
        $rules = array(
            'orden' => 'required',
            'nombre' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/secciones/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $secciones = Encuestas_secciones::find($id);

            $secciones->nombre = Input::get('nombre');
            $secciones->orden = Input::get('orden');

            $secciones->descripcion  = Input::get('descripcion');


            if ($secciones->save()) {
                // Redirect to the group page
                return Redirect::route('secciones.index',$secciones->id_encuesta)->with('success', Lang::get('secciones/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/seccion', $id)->with('error', Lang::get('secciones/message.error.update'));
            }

        }
    }


    public function getCreate()
    {
        // Show the page
        return View('secciones/create');
    }


    public function postCreate($id_encuesta = null)
    {

        $rules = array(
            'orden' => 'required',
            'nombre' => 'required'
        );

        // Validamos que se ha metido el nombre
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $secciones = new secciones;

        $secciones->id_encuesta = $id_encuesta;
        $secciones->nombre = Input::get('nombre');
        $secciones->orden = Input::get('orden');

        $secciones->descripcion  = Input::get('descripcion');

        if ($secciones->save()) {
            // Redirect to the new group page
            return Redirect::route('secciones')->with('success', Lang::get('secciones/message.success.create'));
        }

    }


    public function getModalDelete($id = null)
    {
        $model = 'secciones';
        $confirm_route = $error = null;
        try {
            // Get group information
            $secciones =  secciones::find($id);

            $confirm_route =  route('delete/seccion',['id'=>$secciones->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (Exception $e)  {

            $error = Lang::get('secciones/message.localizacion_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function getDelete($id = null)
    {
        try {
            // Get group information
            $secciones = secciones::find($id);

            // Delete the group
            $secciones->delete();

            // Redirect to the group management page
            return Redirect::route('secciones')->with('success', Lang::get('secciones/message.success.delete'));
        } catch (Exception $e) {
            // Redirect to the group management page
            return Redirect::route('secciones')->with('error', Lang::get('secciones/message.localizacion_not_found', compact('id')));
        }
    }


}

?>