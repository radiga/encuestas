<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
* Sentry filter
*
* Checks if the user is logged in
*/
Route::filter('Sentry', function()
{
	if ( ! Sentry::check()) {
 		return Redirect::to('admin/signin')->with('error', 'Debes hacer login!');
 	}
});

/*Route::get('/', 'WelcomeController@index');*/

Route::get('/', 'BegarController@showHome');



Route::get('/encuestas/empresa/cambio',  'EmpresasController@cambioempresa');

Route::post('ncuestas/empresa/cambio',  function($id_empresa)
{
    return 'Empresa activa  '.$id_empresa;
});


/*Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});
*/




/*Route::post('/encuestas/empresa/cambio}', function()
{
    echo $id_empresa;

});
*/

# ******* Rutas aplicacion encuestas ********

  # Geatión Empresas
  Route::group(array('prefix' => 'empresas'), function () {
    Route::get('/', array('as' => 'empresas', 'uses' => 'EmpresasController@Index'));
    Route::get('create', array('as' => 'create/empresa', 'uses' => 'EmpresasController@getCreate'));
    Route::post('create', 'EmpresasController@postCreate');
    Route::get('{EmpresaId}/edit', array('as' => 'empresas.update', 'uses' => 'EmpresasController@getEdit'));
    Route::post('{EmpresaId}/edit', 'EmpresasController@postEdit');
    Route::get('{EmpresaId}/delete', array('as' => 'delete/empresa', 'uses' => 'EmpresasController@getDelete'));
    Route::get('{EmpresaId}/confirm-delete', array('as' => 'confirm-delete/empresa', 'uses' => 'EmpresasController@getModalDelete'));
    Route::get('{EmpresaId}/restore', array('as' => 'restore/empresa', 'uses' => 'EmpresasController@getRestore'));
  });




Route::group(array('prefix' => 'admin'), function () {

	# Error pages should be shown without requiring login
	Route::get('404', function () {
	    return View('admin/404');
	});
	Route::get('500', function () {
	    return View::make('admin/500');
	});

	# Lock screen aswell
	Route::get('lockscreen', function () {
	    return View::make('admin/lockscreen');
	});


	# All basic routes defined here
	Route::get('signin', array('as' => 'signin','uses' => 'AuthController@getSignin'));
	Route::post('signin','AuthController@postSignin');
	Route::post('signup',array('as' => 'signup','uses' => 'AuthController@postSignup'));
	Route::post('forgot-password',array('as' => 'forgot-password','uses' => 'AuthController@postForgotPassword'));
	Route::get('login2', function () {
	    return View::make('admin/login2');
	});

	# Register2
	Route::get('register2', function () {
	    return View::make('admin/register2');
	});
	Route::post('register2',array('as' => 'register2','uses' => 'AuthController@postRegister2'));
	
	# Forgot Password Confirmation
    Route::get('forgot-password/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    # Logout
	Route::get('logout', array('as' => 'logout','uses' => 'AuthController@getLogout'));

	# Account Activation
    Route::get('activate/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));

    # Dashboard / Index
	Route::get('/', array('as' => 'dashboard','uses' => 'BegarController@showHome'));



	# User Management
    Route::group(array('prefix' => 'users','before' => 'Sentry'), function () {
    	Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
    	Route::get('create', array('as' => 'create/user', 'uses' => 'UsersController@getCreate'));
        Route::post('create', 'UsersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'users.update', 'uses' => 'UsersController@getEdit'));
        Route::post('{userId}/edit', 'UsersController@postEdit');
    	Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'UsersController@getDelete'));
		Route::get('{userId}/confirm-delete', array('as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete'));
		Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
		Route::get('{userId}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
	});
	Route::get('deleted_users',array('as' => 'deleted_users', 'uses' => 'UsersController@getDeletedUsers'));

	# Group Management
    Route::group(array('prefix' => 'groups','before' => 'Sentry'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'GroupsController@getCreate'));
        Route::post('create', 'GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'GroupsController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'GroupsController@getRestore'));
    });

    Route::post('crop_demo','BegarController@crop_demo');
	# Remaining pages will be called from below controller method
	# in real world scenario, you may be required to define all routes manually
	Route::get('{name?}', 'BegarController@showView');


	

}); 
