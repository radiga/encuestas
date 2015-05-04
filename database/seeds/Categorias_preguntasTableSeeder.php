<?php

use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Categorias_preguntas;

class Categorias_preguntasTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_categorias_preguntas')->delete();

		// cat_01
		Categorias_preguntas::create(array(
				'id_empresa' => 1,
				'nombre' => 'Centros Residenciales'
			));

		// Cat_02
		Categorias_preguntas::create(array(
				'id_empresa' => 1,
				'nombre' => 'Centros de Dia'
			));

		// Cat_03
		Categorias_preguntas::create(array(
				'id_empresa' => 1,
				'nombre' => 'Servicio de Cocina'
			));
	}
}