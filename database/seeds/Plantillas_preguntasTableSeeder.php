<?php

use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Plantillas_preguntas;

class Plantillas_preguntasTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_plantillas_preguntas')->delete();

		// Plan_01
		Plantillas_preguntas::create(array(
				'id_empresa' => 1,
				'id_tipo' => 3,
				'id_columna' => 1,
				'titulo' => 'Nombre',
				'pregunta' => 'Nombre',
				'ayuda' => 'Nombre',
				'obligatoria' => false
			));

		// Plan_02
		Plantillas_preguntas::create(array(
				'id_empresa' => 1,
				'id_tipo' => 1,
				'id_columna' => 2,
				'titulo' => 'Sexo',
				'pregunta' => 'Sexo',
				'ayuda' => 'Sexo',
				'obligatoria' => true
			));

        // Plan_03
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 3,
            'titulo' => 'Habitación',
            'pregunta' => '¿Cómo es su habituación?',
            'ayuda' => 'Descripción Habitación',
            'obligatoria' => true
        ));

        // Plan_04
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 4,
            'titulo' => 'Antiguedad',
            'pregunta' => '¿Cuanto tiempo lleva en nuestro Centro?',
            'ayuda' => 'Tiempo en la Habitación',
            'obligatoria' => true
        ));

        // Plan_05
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 5,
            'titulo' => 'Grado de Satisfacción',
            'pregunta' => 'En general, ¿Cual es su grado de satisfacción con nuestro Centro?',
            'ayuda' => 'Grado de Satisfacción',
            'obligatoria' => true
        ));

        // Plan_06
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 6,
            'titulo' => 'Recomendación',
            'pregunta' => '¿Recomendaría nuestro Centro a algún conocido?',
            'ayuda' => 'Recomendación',
            'obligatoria' => true
        ));

        // Plan_07
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 7,
            'titulo' => 'Llamadas',
            'pregunta' => 'El personal, ¿Atiende sus llamadas?',
            'ayuda' => 'Llamadas',
            'obligatoria' => true
        ));

        // Plan_08
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 8,
            'titulo' => 'Recepción',
            'pregunta' => '¿Está contento con el servicio de recepción de nuestro Centro?',
            'ayuda' => 'Recepción',
            'obligatoria' => true
        ));

        // Plan_09
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 9,
            'titulo' => 'Comodidad Habitación',
            'pregunta' => '¿Le resulta cómoda su habitación de la Residencia?',
            'ayuda' => 'Habitación cómoda',
            'obligatoria' => true
        ));


        // Plan_10
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 10,
            'titulo' => 'Comodidad zonas comunes',
            'pregunta' => '¿Está cómodo en las salas de estar, salas de actividades, comedor, etc...?',
            'ayuda' => 'Comodidad zonas comunes',
            'obligatoria' => true
        ));


        // Plan_11
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 11,
            'titulo' => 'Limpieza',
            'pregunta' => '¿Cree que la habitación y zonas comunes están limpias?',
            'ayuda' => 'Limpieza',
            'obligatoria' => true
        ));


        // Plan_12
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 12,
            'titulo' => 'Temperatura',
            'pregunta' => '¿Considera que la temperatura del centro es la adecuada?',
            'ayuda' => 'Temperatura',
            'obligatoria' => true
        ));


        // Plan_13
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 13,
            'titulo' => 'Comida',
            'pregunta' => '¿Considera que la comida es buena?',
            'ayuda' => 'Comida',
            'obligatoria' => true
        ));

        // Plan_14
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 14,
            'titulo' => 'Comida Suficiente',
            'pregunta' => '¿Considera que la cantidad de comida es suficiente?',
            'ayuda' => 'Cantidad Comida',
            'obligatoria' => true
        ));

        // Plan_15
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 15,
            'titulo' => 'Lavandería',
            'pregunta' => '¿Es bueno el servicio de lavandería?',
            'ayuda' => 'Lavandería',
            'obligatoria' => true
        ));

        // Plan_16
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 16,
            'titulo' => 'Actividades',
            'pregunta' => '¿Le gustan las actividades que hacemos?',
            'ayuda' => 'Actividades',
            'obligatoria' => true
        ));

        // Plan_17
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 17,
            'titulo' => 'Trato',
            'pregunta' => '¿Considera que el personal le trata con respeto?',
            'ayuda' => 'Trato',
            'obligatoria' => true
        ));

        // Plan_18
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 18,
            'titulo' => 'Atención Médica',
            'pregunta' => '¿Es buena la atención que recibe por parte de médicos y enfermeras?',
            'ayuda' => 'Atención Médica',
            'obligatoria' => true
        ));

        // Plan_19
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 19,
            'titulo' => 'Aseo',
            'pregunta' => '¿Cree que su aseo personal es adecuado?',
            'ayuda' => 'Aseo',
            'obligatoria' => true
        ));

        // Plan_20
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 20,
            'titulo' => 'Peluquería',
            'pregunta' => '¿Está contento con el servicio de peluquería de nuestro Centro?',
            'ayuda' => 'Peluquería',
            'obligatoria' => true
        ));


        // Plan_21
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 21,
            'titulo' => 'Podología',
            'pregunta' => '¿Está contento con el servicio de podología de nuestro Centro?',
            'ayuda' => 'Peluquería',
            'obligatoria' => true
        ));

        // Plan_22
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 22,
            'titulo' => 'Rehabilitación',
            'pregunta' => '¿Cree que recibe suficiente rehabilitación?',
            'ayuda' => 'Rehabilitación',
            'obligatoria' => true
        ));


        // Plan_23
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 4,
            'id_columna' => 23,
            'titulo' => 'Sugerencias',
            'pregunta' => '¿Podría indicar algo que le gustaría mejorar de nuestro Centro?',
            'ayuda' => 'Sugerencias',
            'obligatoria' => true
        ));

        // Plan_24
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 24,
            'titulo' => 'Transporte',
            'pregunta' => 'El transporte del Centro de Día, ¿está adaptado a sus necesidades?',
            'ayuda' => 'Transporte',
            'obligatoria' => true
        ));

        // Plan_25
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 11,
            'titulo' => 'Limpieza Centro Dia',
            'pregunta' => '¿Está limpio el Centro de Día?',
            'ayuda' => 'Limpieza del Centro de Día',
            'obligatoria' => true
        ));

        // Plan_26
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 25,
            'titulo' => 'Servicio de cocina',
            'pregunta' => 'En general ¿cómo está de satisfecho con el servicio de cocina?',
            'ayuda' => 'Satisfacción servicio de cocina',
            'obligatoria' => true
        ));

        // Plan_27
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 26,
            'titulo' => 'Calidad',
            'pregunta' => 'Calidad de la comida',
            'ayuda' => 'Es de Calidad',
            'obligatoria' => true
        ));

        // Plan_28
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 27,
            'titulo' => 'Suficiete',
            'pregunta' => 'Comida Suficiente',
            'ayuda' => 'Cantidad',
            'obligatoria' => true
        ));





        // Plan_29
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 28,
            'titulo' => 'Fresca',
            'pregunta' => 'Comida Fresca',
            'ayuda' => 'Fresca',
            'obligatoria' => true
        ));
        // Plan_30
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 29,
            'titulo' => 'Sabor',
            'pregunta' => 'Comida con buen sabor',
            'ayuda' => 'sabor',
            'obligatoria' => true
        ));
        // Plan_31
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 30,
            'titulo' => 'Temperatura',
            'pregunta' => 'Se sirve a la temperatura adecuada',
            'ayuda' => 'Temperatura adecuada',
            'obligatoria' => true
        ));
        // Plan_32
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 31,
            'titulo' => 'Presentación',
            'pregunta' => 'Tiene buena presentación',
            'ayuda' => 'Presentación',
            'obligatoria' => true
        ));
        // Plan_33
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 32,
            'titulo' => 'Menús equilibrados',
            'pregunta' => 'Los menús diarios son equilibrados',
            'ayuda' => 'Menús equilibrados',
            'obligatoria' => true
        ));
        // Plan_34
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 33,
            'titulo' => 'Servicio puntual',
            'pregunta' => 'El servicio es puntual',
            'ayuda' => 'Servicio puntual',
            'obligatoria' => true
        ));
        // Plan_35
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 34,
            'titulo' => 'Menús Variados',
            'pregunta' => 'Existen menús variados para diferentes dietas',
            'ayuda' => 'Menús variados',
            'obligatoria' => true
        ));
        // Plan_36
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 1,
            'id_columna' => 35,
            'titulo' => 'Información menus',
            'pregunta' => 'Conoce los menús semanales con antelación',
            'ayuda' => 'Información menus',
            'obligatoria' => true
        ));

        // Plan_37
        Plantillas_preguntas::create(array(
            'id_empresa' => 1,
            'id_tipo' => 5,
            'id_columna' => 1,
            'titulo' => 'Detalle Sugerencias',
            'pregunta' => 'Detalle de las sugerencias',
            'ayuda' => 'Sugerencias',
            'obligatoria' => false
        ));



    }
}