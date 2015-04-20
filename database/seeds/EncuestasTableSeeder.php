<?php

//namespace App;


class EncuestasTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_encuestas')->delete();

		// Encuesta_1
		App\Encuestas::create(array(
				'id_empresa' => 1,
				'titulo' => 'Encuesta de Usuarios de Centros Residenciales',
				'descripcion' => 'Nombre ( Opcional )',
				'bienvenida' => 'Mensaje de Bienvenida',
				'despedida' => 'Mensaje de Despedida',
				'url' => 'http://www.encuestasaralia.com',
				'url_descripcion' => 'Link encuesta oNLINE',
				'activa' => false,
				'anonima' => true
			));
	}
}