<?php

//namespace App;


class Encuestas_preguntasTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_encuestas_preguntas')->delete();

		// Pregunta_01
		 App\Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 3,
				'titulo' => 'Nombre ( Opcional ):',
				'pregunta' => 'Nombre y Apellidos',
				'ayuda' => 'Escribe tú nombre y Apellidos ',
				'obligatoria' => false
			));

		// Pregunta_02
         App\Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Género',
				'pregunta' => 'Género',
				'ayuda' => 'Hombre/Mujer',
				'obligatoria' => true
			));

		// Pregunta_03
         App\Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Habitación',
				'pregunta' => '¿Cómo es su habituación?',
				'obligatoria' => true
			));

		// Pregunta_04
         App\Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Antiguedad',
				'pregunta' => '¿Cuanto tiempo lleva en nuestra Residencia?',
				'obligatoria' => true
			));

		// Pregunta_05
         App\Encuestas_preguntas::create(array(
				'id_seccion' => 1,
				'id_tipo' => 1,
				'titulo' => 'Grado de Satisfacción',
				'pregunta' => 'En general, ¿Cual es su grado de satisfacción con nuestra Residencia?',
				'obligatoria' => true
			));
	}
}