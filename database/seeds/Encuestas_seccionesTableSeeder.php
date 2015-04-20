<?php

//namespace App;


class Encuestas_seccionesTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_encuestas_secciones')->delete();

		// secciones
		App\Encuestas_secciones::create(array(
				'id_encuesta' => 1,
				'orden' => 1,
				'nombre' => 'general',
				'descripcion' => 'Sección General'
			));
	}
}