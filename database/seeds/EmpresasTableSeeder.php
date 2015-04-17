<?php

class EmpresasTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_empresas')->delete();

		// Generar_Empresa_Aralia
		Empresas::create(array(
				'nombre' => 'Aralia Servicios Socio-Sanitarios'
			));

		// Generar Empresa UTE CD Fuencarral
		Empresas::create(array(
				'nombre' => 'Ute CD Fuencarral'
			));
	}
}