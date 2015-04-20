<?php namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use App\Empresas;

class EmpresasController extends BegarController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function Index()
  {
      // Grab all the users
      $empresas = Empresas::All();

      // Show the page
      return View('encuestas.empresas.index', compact('empresas'));
  }

    public function getEdit($id = null)
    {

     //   try {
            // Get the group information
            //$empresa = Empresas::findGroupById($id);
            $empresa = Empresas::find($id);

    //    } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
   //            return Redirect::route('empresas')->with('error', Lang::get('empresas/message.group_not_found', compact('id')));
    //      }

        // Show the page
        return View('encuestas/empresas/edit', compact('empresa'));
    }



    public function postEdit($id = null)
    {

        /*try {
            // Get the group information
            $group = Sentry::getGroupProvider()->findById($id);
        } catch (GroupNotFoundException $e) {
            // Redirect to the groups management page
            return Rediret::route('groups')->with('error', Lang::get('groups/message.group_not_found', compact('id')));
        }*/

        $empresa = Empresas::find($id);

        // Declare the rules for the form validation
        $rules = array(
            'nombre' => 'required',
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }


            // Update the group data
            $empresa->nombre = Input::get('nombre');

            // Was the group updated?
            if ($empresa->save()) {
                // Redirect to the group page
                return Redirect::route('empresas')->with('success', Lang::get('empresas/message.success.update'));
            } else {
                // Redirect to the group page
                return Redirect::route('update/empresa', $id)->with('error', Lang::get('groups/message.error.update'));
            }


     }



  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>