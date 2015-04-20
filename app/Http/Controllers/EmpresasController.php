<?php namespace App\Http\Controllers;


use Validator;
use Input;
use Redirect;
use Lang;
use URL;
use App\Empresas;

class EmpresasController extends BegarController {


  public function Index()
  {

      $empresas = Empresas::All();

      return View('encuestas.empresas.index', compact('empresas'));
  }

    public function getEdit($id = null)
    {
       $empresa = Empresas::find($id);
        return View('encuestas/empresas/edit', compact('empresa'));
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
        return View('encuestas/empresas/create');
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