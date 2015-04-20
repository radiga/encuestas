<?php

//namespace App;

class EmpresasTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_empresas')->delete();

		// Generar_Empresa_Aralia
		App\Empresas::create(array(
				'nombre' => 'Aralia Servicios Socio-Sanitarios'
			));

		// Generar Empresa UTE CD Fuencarral
		App\Empresas::create(array(
				'nombre' => 'Ute CD Fuencarral'
			));
	}
}