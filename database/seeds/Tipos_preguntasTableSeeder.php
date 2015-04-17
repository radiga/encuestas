<?php

class Tipos_preguntasTableSeeder extends DatabaseSeeder {

	public function run()
	{
		//DB::table('enc_tipos_preguntas')->delete();

		// tipo_pregunta_01
		Tipos_preguntas::create(array(
				'tipo' => 'A',
				'nombre' => 'Elegir uno entre varios, del 1 al N',
				'estilo' => 'radiobutton'
			));

		// tipo_pregunta_02
        Tipos_preguntas::create(array(
				'tipo' => 'B',
				'nombre' => 'Lista Desplegable',
				'estilo' => 'combo'
			));

		// tipo_pregunta_03
        Tipos_preguntas::create(array(
				'tipo' => 'C',
				'nombre' => 'Texto Libre',
				'estilo' => 'text'
			));
	}
}