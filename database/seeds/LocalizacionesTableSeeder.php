<?php

//namespace App;


class LocalizacionesTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_localizaciones')->delete();

		// Localizacion_central
        App\Localizaciones::create(array(
				'id_empresa' => 1,
				'nombre' => 'Oficina Central'
			));

		// Localizacion_Elias
        App\Localizaciones::create(array(
				'id_empresa' => 1,
				'nombre' => 'Residencia Elias Martinez'
			));

		// Localizacion_Vallecas
        App\Localizaciones::create(array(
				'id_empresa' => 1,
				'nombre' => 'Residencia Ensanche Vallecas'
			));
	}
}