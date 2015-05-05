<?php


use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Encuestas_secciones;

class Encuestas_seccionesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_encuestas_secciones')->delete();

		// secciones 1
		Encuestas_secciones::create(array(
				'id_encuesta' => 1,
				'orden' => 1,
				'nombre' => 'general',
				'descripcion' => 'Sección General'
			));

        Encuestas_secciones::create(array(
            'id_encuesta' => 2,
            'orden' => 1,
            'nombre' => 'general',
            'descripcion' => 'Sección General'
        ));

        Encuestas_secciones::create(array(
            'id_encuesta' => 3,
            'orden' => 1,
            'nombre' => 'general',
            'descripcion' => 'Sección General'
        ));

    }
}