<?php

class Respuestas_posiblesTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_respuestas_posibles')->delete();

		// opcion_01
		Respuestas_posibles::create(array(
				'id_pregunta' => 1,
				'etiqueta' => 'Hombre',
				'valor' => '1'
			));

		// opcion_02
        Respuestas_posibles::create(array(
				'id_pregunta' => 1,
				'etiqueta' => 'Mujer',
				'valor' => '2'
			));

		// Opcion_2_1
        Respuestas_posibles::create(array(
				'id_pregunta' => 2,
				'etiqueta' => 'Individual',
				'valor' => '1'
			));

		// opcion_2_2
        Respuestas_posibles::create(array(
				'id_pregunta' => 2,
				'etiqueta' => 'Doble',
				'valor' => '2'
			));

		// Opcion_3_1
        Respuestas_posibles::create(array(
				'id_pregunta' => 3,
				'etiqueta' => 'Menos de 1 año',
				'valor' => '1'
			));

		// opcion_3_2
        Respuestas_posibles::create(array(
				'id_pregunta' => 3,
				'etiqueta' => 'Entre 1 y 3 Años',
				'valor' => '2'
			));

		// Opcion_3_3
        Respuestas_posibles::create(array(
				'id_pregunta' => 3,
				'etiqueta' => 'Entre 3 y 5 Años',
				'valor' => '3'
			));

		// Opcion_3_4
        Respuestas_posibles::create(array(
				'id_pregunta' => 3,
				'etiqueta' => 'Más de 5 años',
				'valor' => '4'
			));

		// Opcion_4_1
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '1',
				'valor' => '1'
			));

		// Opcion_4_2
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '2',
				'valor' => '2'
			));

		// Opcion_4_3
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '3',
				'valor' => '3'
			));

		// Opcion_4_4
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '4',
				'valor' => '4'
			));

		// Opcion_4_5
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '5',
				'valor' => '5'
			));

		// Opcion_4_6
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '6',
				'valor' => '6'
			));

		// Opcion_4_7
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '7',
				'valor' => '7'
			));

		// Opcion_4_8
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '8',
				'valor' => '8'
			));

		// Opcion_4_9
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '9',
				'valor' => '9'
			));

		// opcion_4_10
        Respuestas_posibles::create(array(
				'id_pregunta' => 4,
				'etiqueta' => '10',
				'valor' => '10'
			));
	}
}