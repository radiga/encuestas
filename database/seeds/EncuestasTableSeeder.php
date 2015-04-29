<?php


use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Encuestas;

class EncuestasTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_encuestas')->delete();

		// Encuesta_1
		Encuestas::create(array(
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