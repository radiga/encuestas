<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('EmpresasTableSeeder');
		$this->command->info('empresas table seeded!');

		$this->call('LocalizacionesTableSeeder');
		$this->command->info('localizaciones table seeded!');

		$this->call('EncuestasTableSeeder');
		$this->command->info('encuestas table seeded!');

		$this->call('Encuestas_seccionesTableSeeder');
		$this->command->info('encuestas_secciones table seeded!');

        $this->call('ColumnasTableSeeder');
        $this->command->info('Columnas table seeded!');


		$this->call('Tipos_preguntasTableSeeder');
		$this->command->info('tipos_preguntas table seeded!');

		$this->call('Encuestas_preguntasTableSeeder');
		$this->command->info('encuestas_preguntas table seeded!');

		$this->call('Respuestas_posiblesTableSeeder');
		$this->command->info('respuestas_posibles table seeded!');

	}
}