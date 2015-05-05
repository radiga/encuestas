<?php

use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Plantillas_respuestas_posibles;

class Plantillas_respuestas_posiblesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_plant_respuestas_posibles')->delete();

		// opcion_2_1
		Plantillas_respuestas_posibles::create(array(
				'id_plantilla' => 2,
				'etiqueta' => 'Hombre',
				'valor' => '1'
			));

		// opcion_2_2
		Plantillas_respuestas_posibles::create(array(
				'id_plantilla' => 2,
				'etiqueta' => 'Mujer',
				'valor' => '2'
			));
        //opcion_3_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 3,
            'etiqueta' => 'Individual',
            'valor' => '1'
        ));

        // opcion_3_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 3,
            'etiqueta' => 'Doble',
            'valor' => '2'
        ));

        // Opcion_4_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 4,
            'etiqueta' => 'Menos de 1 año',
            'valor' => '1'
        ));

        // opcion_4_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 4,
            'etiqueta' => 'Entre 1 y 3 Años',
            'valor' => '2'
        ));

        // Opcion_4_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 4,
            'etiqueta' => 'Entre 3 y 5 Años',
            'valor' => '3'
        ));

        // Opcion_4_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 4,
            'etiqueta' => 'Más de 5 años',
            'valor' => '4'
        ));

        // Opcion_5_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '1',
            'valor' => '1'
        ));

        // Opcion_5_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '2',
            'valor' => '2'
        ));

        // Opcion_5_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '3',
            'valor' => '3'
        ));

        // Opcion_5_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '4',
            'valor' => '4'
        ));

        // Opcion_5_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '5',
            'valor' => '5'
        ));

        // Opcion_5_6
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '6',
            'valor' => '6'
        ));

        // Opcion_5_7
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '7',
            'valor' => '7'
        ));

        // Opcion_5_8
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '8',
            'valor' => '8'
        ));

        // Opcion_5_9
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '9',
            'valor' => '9'
        ));

        // opcion_5_10
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 5,
            'etiqueta' => '10',
            'valor' => '10'
        ));

        // opcion_6_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 6,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_6_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 6,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_6_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 6,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '3'
        ));


        // opcion_7_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 7,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_7_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 7,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_7_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 7,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_7_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 7,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_8_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 8,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_8_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 8,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_8_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 8,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_8_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 8,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_9_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 9,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_9_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 9,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_9_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 9,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_9_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 9,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_10_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 10,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_10_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 10,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_10_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 10,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_10_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 10,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_11_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 11,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_11_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 11,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_11_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 11,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_11_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 11,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_12_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 12,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_12_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 12,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_12_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 12,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_12_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 12,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_13_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 13,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_13_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 13,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_13_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 13,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_13_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 13,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_14_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 14,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_14_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 14,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_14_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 14,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_14_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 14,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));
        
        // opcion_15_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 15,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_15_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 15,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_15_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 15,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_15_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 15,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));

        // opcion_16_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 16,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_16_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 16,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_16_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 16,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_16_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 16,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));

        // opcion_17_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 17,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_17_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 17,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_17_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 17,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_17_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 17,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));

        // opcion_18_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 18,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_18_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 18,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_18_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 18,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_18_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 18,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_19_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 19,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_19_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 19,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_19_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 19,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_19_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 19,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));

        // opcion_20_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 20,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_20_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 20,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_20_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 20,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_20_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 20,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));

        // opcion_21_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 21,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_21_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 21,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_21_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 21,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_21_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 21,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_22_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 22,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_22_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 22,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_22_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 22,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_22_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 22,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_24_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 24,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_24_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 24,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_24_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 24,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_24_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 24,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // opcion_25_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 25,
            'etiqueta' => 'Si',
            'valor' => '1'
        ));

        // opcion_25_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 25,
            'etiqueta' => 'No',
            'valor' => '2'
        ));

        // opcion_25_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 25,
            'etiqueta' => 'A veces',
            'valor' => '3'
        ));
        // opcion_25_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 25,
            'etiqueta' => 'No Sabe, No Contesta',
            'valor' => '4'
        ));


        // Opcion_26_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '1',
            'valor' => '1'
        ));

        // Opcion_26_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '2',
            'valor' => '2'
        ));

        // Opcion_26_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '3',
            'valor' => '3'
        ));

        // Opcion_26_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '4',
            'valor' => '4'
        ));

        // Opcion_26_26
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '26',
            'valor' => '26'
        ));

        // Opcion_26_6
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '6',
            'valor' => '6'
        ));

        // Opcion_26_7
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '7',
            'valor' => '7'
        ));

        // Opcion_26_8
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '8',
            'valor' => '8'
        ));

        // Opcion_26_9
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '9',
            'valor' => '9'
        ));

        // opcion_26_10
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 26,
            'etiqueta' => '10',
            'valor' => '10'
        ));



        // opcion_27_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 27,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_27_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 27,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_27_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 27,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_27_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 27,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_27_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 27,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_28_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 28,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_28_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 28,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_28_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 28,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_28_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 28,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_28_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 28,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_29_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 29,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_29_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 29,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_29_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 29,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_29_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 29,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_29_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 29,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_30_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 30,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_30_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 30,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_30_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 30,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_30_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 30,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_30_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 30,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_31_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 31,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_31_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 31,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_31_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 31,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_31_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 31,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_31_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 31,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_32_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 32,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_32_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 32,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_32_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 32,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_32_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 32,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_32_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 32,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_33_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 33,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_33_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 33,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_33_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 33,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_33_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 33,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_33_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 33,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_34_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 34,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_34_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 34,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_34_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 34,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_34_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 34,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_34_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 34,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_35_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 35,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_35_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 35,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_35_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 35,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_35_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 35,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_35_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 35,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));


        // opcion_36_1
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 36,
            'etiqueta' => 'Nada Satisfecho',
            'valor' => '1'
        ));

        // opcion_36_2
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 36,
            'etiqueta' => 'Poco Satisfecho',
            'valor' => '2'
        ));

        // opcion_36_3
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 36,
            'etiqueta' => 'Satisfecho',
            'valor' => '3'
        ));
        // opcion_36_4
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 36,
            'etiqueta' => 'Bastante Satisfecho',
            'valor' => '4'
        ));

        // opcion_36_5
        Plantillas_respuestas_posibles::create(array(
            'id_plantilla' => 36,
            'etiqueta' => 'Muy Satisfecho',
            'valor' => '5'
        ));    
    
    }
}