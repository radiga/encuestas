<?php

class LocalizacionesTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_localizaciones')->delete();

		// Localizacion_central
		Localizaciones::create(array(
				'id_empresa' => 1,
				'nombre' => 'Oficina Central'
			));

		// Localizacion_Elias
        Localizaciones::create(array(
				'id_empresa' => 1,
				'nombre' => 'Residencia Elias Martinez'
			));

		// Localizacion_Vallecas
        Localizaciones::create(array(
				'id_empresa' => 1,
				'nombre' => 'Residencia Ensanche Vallecas'
			));
	}
}