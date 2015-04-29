<?php


use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Columnas;

class ColumnasTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_columnas')->delete();

		// columna_01
		Columnas::create(array(
				'codigo' => 'NOMBRE',
				'descripcion' => 'Nombre del que rellena la encuesta',
				'codigo_interno' => 't01',
				'tipo_columna' => 't',
				'id_empresa' => 1
			));

		// columna_02
		Columnas::create(array(
				'codigo' => 'SEXO',
				'descripcion' => 'Hombre/Mujer',
				'codigo_interno' => 'v01',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_03
		Columnas::create(array(
				'codigo' => 'TIPO_HABITACION',
				'descripcion' => 'Tipo de Habitación',
				'codigo_interno' => 'v02',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_04
		Columnas::create(array(
				'codigo' => 'ANTIGUEDAD',
				'descripcion' => 'Antigüedad',
				'codigo_interno' => 'v03',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_05
		Columnas::create(array(
				'codigo' => 'SATISFACCION',
				'descripcion' => 'Nivel de Satisfacción',
				'codigo_interno' => 'v04',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_06
		Columnas::create(array(
				'codigo' => 'RECOMENDACION',
				'descripcion' => 'Recomendación',
				'codigo_interno' => 'v05',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));
	}
}