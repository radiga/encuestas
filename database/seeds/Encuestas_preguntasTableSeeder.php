<?php

use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Encuestas_preguntas;

class Encuestas_preguntasTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_encuestas_preguntas')->delete();

		// Pregunta_01
		Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 3,
				'titulo' => 'Nombre ( Opcional ):',
				'pregunta' => 'Nombre y Apellidos',
				'ayuda' => 'Escribe tú nombre y Apellidos ',
				'obligatoria' => false,
				'id_columna' => 1,
				'orden' => 5
			));

		// Pregunta_02
		Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Género',
				'pregunta' => 'Género',
				'ayuda' => 'Hombre/Mujer',
				'obligatoria' => true,
				'id_columna' => 2,
				'orden' => 10
			));

		// Pregunta_03
		Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Habitación',
				'pregunta' => '¿Cómo es su habituación?',
				'obligatoria' => true,
				'id_columna' => 3,
				'orden' => 15
			));

		// Pregunta_04
		Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Antiguedad',
				'pregunta' => '¿Cuanto tiempo lleva en nuestra Residencia?',
				'obligatoria' => true,
				'id_columna' => 4,
				'orden' => 20
			));

		// Pregunta_05
		Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Grado de Satisfacción',
				'pregunta' => 'En general, ¿Cual es su grado de satisfacción con nuestra Residencia?',
				'obligatoria' => true,
				'id_columna' => 5,
				'orden' => 25
			));
	}
}