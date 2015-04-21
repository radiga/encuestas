<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

       $this->call('AdminSeeder');

		$this->call('EmpresasTableSeeder');
		$this->command->info('Empresas table seeded!');

		$this->call('LocalizacionesTableSeeder');
		$this->command->info('Localizaciones table seeded!');

		$this->call('EncuestasTableSeeder');
		$this->command->info('Encuestas table seeded!');

		$this->call('Encuestas_seccionesTableSeeder');
		$this->command->info('Encuestas_secciones table seeded!');

		$this->call('Tipos_preguntasTableSeeder');
		$this->command->info('Tipos_preguntas table seeded!');

		$this->call('Encuestas_preguntasTableSeeder');
		$this->command->info('encuestas_preguntas table seeded!');

		$this->call('Respuestas_posiblesTableSeeder');
		$this->command->info('Respuestas_posibles table seeded!');
	}
}