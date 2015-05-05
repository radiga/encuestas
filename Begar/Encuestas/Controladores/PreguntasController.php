<?php namespace Begar\Encuestas\Controladores;

use Begar\_Controladores\BegarController;

use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\DB;


use Validator;
use Input;
use Redirect;
use Lang;
use URL;

use Begar\Encuestas\Modelos\Encuestas_preguntas;

use Begar\Encuestas\Modelos\Encuestas_secciones;

use Begar\Encuestas\Modelos\Tipos_preguntas;

use Begar\Encuestas\Modelos\encuestas;

class preguntasController extends BegarController {




 public function Index($id_encuesta = null)
  {

      session::put('id_encuesta',$id_encuesta);
      $encuestas = encuestas::find($id_encuesta);

      $secciones = Encuestas_secciones::where('id_encuesta', '=', $id_encuesta)->get();

      $tipos_preguntas = Tipos_preguntas::All();

      $preguntas = DB::table('enc_encuestas_preguntas')
          ->join('enc_encuestas_secciones', function($join)
          {
              $join->on('enc_encuestas_preguntas.id_seccion', '=', 'enc_encuestas_secciones.id')
                  ->where('enc_encuestas_secciones.id_encuesta', '=', 1);

          })

          ->join('enc_tipos_preguntas', function($join)
          {
              $join->on('enc_encuestas_preguntas.id_tipo', '=', 'enc_tipos_preguntas.id');

          })

          ->select('enc_encuestas_preguntas.id', 'enc_encuestas_secciones.nombre', 'enc_tipos_preguntas.tipo','enc_encuestas_preguntas.id_padre', 'enc_encuestas_preguntas.id_seccion', 'enc_encuestas_preguntas.id_tipo', 'enc_encuestas_preguntas.id_columna','enc_encuestas_preguntas.orden','enc_encuestas_preguntas.titulo', 'enc_encuestas_preguntas.pregunta', 'enc_encuestas_preguntas.ayuda', 'enc_encuestas_preguntas.obligatoria', 'enc_encuestas_preguntas.estilo')

          ->get();


         return View('preguntas/index', compact('preguntas','encuestas','secciones','tipos_preguntas'));

  }


    public function getEdit($id_pregunta = null)
    {
        $preguntas = Encuestas_preguntas::find($id_pregunta);

        $secciones = Encuestas_secciones::where('id_encuesta', '=', session::get('id_encuesta'))->get();

        $tipos_preguntas = Tipos_preguntas::All();

        $encuestas = Encuestas::where('id', '=',session::get('id_encuesta') )->get();

        return View('preguntas/edit', compact('preguntas', 'encuestas', 'secciones', 'tipos_preguntas'));
    }


    public function postEdit($id = null)
    {
        $rules = array(
            'id_tipo' => 'required',
            'id_seccion' => 'required',
            'pregunta' => 'required',
            'ayuda' => 'required',
            'obligatoria' => 'required',

        );

     /*   echo Input::get('id_seccion');
        echo Input::get('id_tipo');
        echo Input::get('titulo');
        echo Input::get('pregunta');
        echo Input::get('ayuda');
        echo Input::get('id_columna');
        echo Input::get('orden');
        echo Input::get('obligatoria');
        echo Input::get('estilo');
*/


        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/preguntas/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $preguntas = Encuestas_preguntas::find($id);

            $preguntas->id_padre = 0;
            $preguntas->id_seccion = Input::get('id_seccion');
            $preguntas->id_tipo = Input::get('id_tipo');
            $preguntas->titulo  = Input::get('titulo');
            $preguntas->pregunta  = Input::get('pregunta');
            $preguntas->ayuda  = Input::get('ayuda');

            $preguntas->id_columna  = Input::get('id_columna');
            $preguntas->orden  = Input::get('orden');

            $preguntas->obligatoria  = Input::get('obligatoria');
            $preguntas->estilo  = Input::get('estilo');


            if ($preguntas->save()) {

                return Redirect::route('preguntas.index', session::get('id_encuesta'))->with('success', Lang::get('preguntas/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/pregunta', $id)->with('error', Lang::get('preguntas/message.error.update'));
            }

        }
    }


    public function getCreate($id_encuesta = null)
    {

        //echo $id_encuesta;

        Session::put('id_encuesta', $id_encuesta);

        $secciones = Encuestas_secciones::where('id_encuesta', '=', $id_encuesta)->get();

        $tipos_preguntas = Tipos_preguntas::All();


        return View('preguntas/create',compact('secciones','tipos_preguntas'));
    }


    public function postCreate($id_encuesta = null)
    {


        $rules = array(
            'id_tipo' => 'required',
            'id_seccion' => 'required',
            'pregunta' => 'required',
            'obligatoria' => 'required'

        );

        // Validamos que se ha metido el nombre
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $preguntas = new Encuestas_preguntas;

        $preguntas->id_padre = 0;
            $preguntas->id_seccion = Input::get('id_seccion');
            $preguntas->id_tipo = Input::get('id_tipo');
            $preguntas->titulo  = Input::get('titulo');
            $preguntas->pregunta  = Input::get('pregunta');
            $preguntas->ayuda  = Input::get('ayuda');
            $preguntas->obligatoria  = Input::get('obligatoria');
            $preguntas->estilo  = Input::get('estilo');
            $preguntas->id_columna  = Input::get('id_columna');
            $preguntas->orden  = Input::get('orden');

        if ($preguntas->save()) {
            // Redirect to the new group page
            return Redirect::route('preguntas.index',Session::get('id_encuesta'))->with('success', Lang::get('preguntas/message.success.create'));
        }

    }


    public function getModalDelete($id = null)
    {

       $model = 'preguntas';
        $confirm_route = $error = null;
        try {
            // Get group information
            $preguntas =  Encuestas_preguntas::find($id);

            $confirm_route =  route('delete/pregunta',['id'=>$preguntas->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (Exception $e)  {

            $error = Lang::get('preguntas/message.localizacion_not_found', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function getDelete($id = null)
    {
        try {
            // Get group information
            $preguntas = Encuestas_preguntas::find($id);

            // Delete the group
            $preguntas->delete();

            // Redirect to the group management page
            return Redirect::route('preguntas')->with('success', Lang::get('preguntas/message.success.delete'));
        } catch (Exception $e) {
            // Redirect to the group management page
            return Redirect::route('preguntas')->with('error', Lang::get('preguntas/message.localizacion_not_found', compact('id')));
        }
    }


}

?>