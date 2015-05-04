<?php


# ******* Rutas aplicacion encuestas ********

# Geatión Empresas
Route::get('/encuestas/empresa/cambio',  '\Begar\Encuestas\Controladores\EmpresasController@cambioempresa');
Route::group(array('prefix' => 'empresas'), function () {
    Route::get('/', array('as' => 'empresas', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@Index'));
    Route::get('create', array('as' => 'create/empresa', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@getCreate'));
    Route::post('create', '\Begar\Encuestas\Controladores\EmpresasController@postCreate');


    Route::post('cambiar',  array('as' => 'cambiar/empresa', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@seleccionarempresa'));

    Route::get('{EmpresaId}/edit', array('as' => 'empresas.update', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@getEdit'));
    Route::post('{EmpresaId}/edit', '\Begar\Encuestas\Controladores\EmpresasController@postEdit');
    Route::get('{EmpresaId}/delete', array('as' => 'delete/empresa', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@getDelete'));
    Route::get('{EmpresaId}/confirm-delete', array('as' => 'confirm-delete/empresa', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@getModalDelete'));
    Route::get('{EmpresaId}/restore', array('as' => 'restore/empresa', 'uses' => '\Begar\Encuestas\Controladores\EmpresasController@getRestore'));
});

# Geatión Localizaciones
Route::group(array('prefix' => 'localizaciones'), function () {
    Route::get('/', array('as' => 'localizaciones', 'uses' => '\Begar\Encuestas\Controladores\LocalizacionesController@Index'));
    Route::get('create', array('as' => 'create/localizacion', 'uses' => '\Begar\Encuestas\Controladores\LocalizacionesController@getCreate'));
    Route::post('create', '\Begar\Encuestas\Controladores\LocalizacionesController@postCreate');
    Route::get('{localizacionId}/edit', array('as' => 'localizaciones.update', 'uses' => '\Begar\Encuestas\Controladores\LocalizacionesController@getEdit'));
    Route::post('{localizacionId}/edit', '\Begar\Encuestas\Controladores\LocalizacionesController@postEdit');
    Route::get('{localizacionId}/delete', array('as' => 'delete/localizacion', 'uses' => '\Begar\Encuestas\Controladores\LocalizacionesController@getDelete'));
    Route::get('{localizacionId}/confirm-delete', array('as' => 'confirm-delete/localizacion', 'uses' => '\Begar\Encuestas\Controladores\LocalizacionesController@getModalDelete'));
    Route::get('{localizacionId}/restore', array('as' => 'restore/localizacion', 'uses' => '\Begar\Encuestas\Controladores\LocalizacionesController@getRestore'));
});

# Gestión encuestas
Route::group(array('prefix' => 'encuestas'), function () {
    Route::get('/', array('as' => 'encuestas', 'uses' => '\Begar\Encuestas\Controladores\EncuestasController@Index'));
    Route::get('create', array('as' => 'create/encuesta', 'uses' => '\Begar\Encuestas\Controladores\EncuestasController@getCreate'));
    Route::post('create', '\Begar\Encuestas\Controladores\EncuestasController@postCreate');
    Route::get('{encuestaId}/edit', array('as' => 'encuestas.update', 'uses' => '\Begar\Encuestas\Controladores\EncuestasController@getEdit'));
    Route::post('{encuestaId}/edit', '\Begar\Encuestas\Controladores\EncuestasController@postEdit');
    Route::get('{encuestaId}/delete', array('as' => 'delete/encuesta', 'uses' => '\Begar\Encuestas\Controladores\EncuestasController@getDelete'));
    Route::get('{encuestaId}/confirm-delete', array('as' => 'confirm-delete/encuesta', 'uses' => '\Begar\Encuestas\Controladores\EncuestasController@getModalDelete'));
    Route::get('{encuestaId}/restore', array('as' => 'restore/encuesta', 'uses' => '\Begar\Encuestas\Controladores\EncuestasController@getRestore'));

});


# Gestión de preguntas
Route::get('{id_encuesta}/preguntas', array('as' => 'preguntas.index', 'uses' => '\Begar\Encuestas\Controladores\PreguntasController@index'));


# Gestión secciones
Route::group(array('prefix' => 'secciones'), function () {
    Route::get('/', array('as' => 'secciones', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@Index'));
    Route::get('{id_encuesta}/create', array('as' => 'create/seccion', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@getCreate'));
    Route::post('{id_encuesta}/create', array('as' => 'create/seccion', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@postCreate'));
    Route::get('{id_encuesta}/secciones', array('as' => 'secciones.index', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@Index'));
    Route::get('{id_seccion}/edit', array('as' => 'secciones.update', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@getEdit'));
    Route::post('{id_seccion}/edit', '\Begar\Encuestas\Controladores\SeccionesController@postEdit');
    Route::get('{id_seccion}/delete', array('as' => 'delete/seccion', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@getDelete'));
    Route::get('{id_seccion}/confirm-delete', array('as' => 'confirm-delete/seccion', 'uses' => '\Begar\Encuestas\Controladores\SeccionesController@getModalDelete'));
});

# Geatión tipos de preguntas
Route::group(array('prefix' => 'tipospreguntas'), function () {
    Route::get('/', array('as' => 'tipospreguntas', 'uses' => '\Begar\Encuestas\Controladores\TiposPreguntasController@Index'));
    Route::get('create', array('as' => 'create/tipospregunta', 'uses' => '\Begar\Encuestas\Controladores\TiposPreguntasController@getCreate'));
    Route::post('create', '\Begar\Encuestas\Controladores\TiposPreguntasController@postCreate');
    Route::get('{tipospreguntasId}/edit', array('as' => 'tipospreguntas.update', 'uses' => '\Begar\Encuestas\Controladores\TiposPreguntasController@getEdit'));
    Route::post('{tipospreguntasId}/edit', '\Begar\Encuestas\Controladores\TiposPreguntasController@postEdit');
    Route::get('{tipospreguntasId}/delete', array('as' => 'delete/tipospregunta', 'uses' => '\Begar\Encuestas\Controladores\TiposPreguntasController@getDelete'));
    Route::get('{tipospreguntasId}/confirm-delete', array('as' => 'confirm-delete/tipospregunta', 'uses' => '\Begar\Encuestas\Controladores\TiposPreguntasController@getModalDelete'));
    Route::get('{tipospreguntasId}/restore', array('as' => 'restore/tipospregunta', 'uses' => '\Begar\Encuestas\Controladores\TiposPreguntasController@getRestore'));
});
