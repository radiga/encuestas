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
				'descripcion' => 'Nombre',
				'codigo_interno' => 't01',
				'tipo_columna' => 't',
				'id_empresa' => 1
			));

		// columna_02
		Columnas::create(array(
				'codigo' => 'SEXO',
				'descripcion' => 'Sexo',
				'codigo_interno' => 'v01',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_03
		Columnas::create(array(
				'codigo' => 'HABITACION',
				'descripcion' => 'Tipo de Habitación',
				'codigo_interno' => 'v02',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_04
		Columnas::create(array(
				'codigo' => 'TIEMPO_EN_RESIDENCIA',
				'descripcion' => 'Tiempo en Residencia',
				'codigo_interno' => 'v03',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_05
		Columnas::create(array(
				'codigo' => 'SATISFACCION',
				'descripcion' => 'Satisfacción',
				'codigo_interno' => 'v04',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

		// columna_06
		Columnas::create(array(
				'codigo' => 'RECOMENDARÍA',
				'descripcion' => 'Recomendaría',
				'codigo_interno' => 'v05',
				'tipo_columna' => 'v',
				'id_empresa' => 1
			));

        // columna_07
        Columnas::create(array(
            'codigo' => 'LLAMADAS',
            'descripcion' => 'Llamadas',
            'codigo_interno' => 'v06',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_08
        Columnas::create(array(
            'codigo' => 'RECEPCION',
            'descripcion' => 'Recepción',
            'codigo_interno' => 'v07',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_09
        Columnas::create(array(
            'codigo' => 'HABITACION_COMODA',
            'descripcion' => 'Habitación Cómoda',
            'codigo_interno' => 'v08',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_10
        Columnas::create(array(
            'codigo' => 'ZONAS_COMUNES_COMODAS',
            'descripcion' => 'Zonas Comunes Cómodas',
            'codigo_interno' => 'v09',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_11
        Columnas::create(array(
            'codigo' => 'LIMPIEZA',
            'descripcion' => 'Limpieza',
            'codigo_interno' => 'v10',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_12
        Columnas::create(array(
            'codigo' => 'TEMPERATURA',
            'descripcion' => 'Temperatura',
            'codigo_interno' => 'v11',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_13
        Columnas::create(array(
            'codigo' => 'CALIDAD_COMIDA',
            'descripcion' => 'Calidad Comida',
            'codigo_interno' => 'v12',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_14
        Columnas::create(array(
            'codigo' => 'CANTIDAD_COMIDA',
            'descripcion' => 'Cantidad Comida',
            'codigo_interno' => 'v13',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_15
        Columnas::create(array(
            'codigo' => 'LAVANDERIA',
            'descripcion' => 'Lavandería',
            'codigo_interno' => 'v14',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_16
        Columnas::create(array(
            'codigo' => 'ACTIVIDADES',
            'descripcion' => 'Actividades',
            'codigo_interno' => 'v15',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_17
        Columnas::create(array(
            'codigo' => 'TRATO',
            'descripcion' => 'Trato',
            'codigo_interno' => 'v16',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_18
        Columnas::create(array(
            'codigo' => 'ATENCION_MEDICA',
            'descripcion' => 'Atención Médica',
            'codigo_interno' => 'v17',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_19
        Columnas::create(array(
            'codigo' => 'ASEO',
            'descripcion' => 'Aseo',
            'codigo_interno' => 'v18',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_20
        Columnas::create(array(
            'codigo' => 'PELUQUERIA',
            'descripcion' => 'Peluquería',
            'codigo_interno' => 'v19',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_21
        Columnas::create(array(
            'codigo' => 'PODOLOGIA',
            'descripcion' => 'Podología',
            'codigo_interno' => 'v20',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_22
        Columnas::create(array(
            'codigo' => 'REHABILITACION',
            'descripcion' => 'Rehabilitación',
            'codigo_interno' => 'v21',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_23
        Columnas::create(array(
            'codigo' => 'SUGERENCIAS',
            'descripcion' => 'Sugerencias',
            'codigo_interno' => 't02',
            'tipo_columna' => 't',
            'id_empresa' => 1
        ));

        // columna_24
        Columnas::create(array(
            'codigo' => 'TRANSPORTE',
            'descripcion' => 'Transporte',
            'codigo_interno' => 'v22',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_25
        Columnas::create(array(
            'codigo' => 'SERVICIO_COCINA',
            'descripcion' => 'Satisfacción Servicio Cocina',
            'codigo_interno' => 'v23',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_26
        Columnas::create(array(
            'codigo' => 'COMIDA_CALIDAD',
            'descripcion' => 'Calidad de la Comida',
            'codigo_interno' => 'v24',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_27
        Columnas::create(array(
            'codigo' => 'COMIDA_SUFICIENTE',
            'descripcion' => 'Comida suficiente',
            'codigo_interno' => 'v25',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_28
        Columnas::create(array(
            'codigo' => 'COMIDA_FRESCA',
            'descripcion' => 'Comida fresca',
            'codigo_interno' => 'v26',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_29
        Columnas::create(array(
            'codigo' => 'COMIDA_BUEN_SABOR',
            'descripcion' => 'Comida buen sabor',
            'codigo_interno' => 'v27',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_30
        Columnas::create(array(
            'codigo' => 'COMIDA_TEMPERATURA_ADECUADA',
            'descripcion' => 'Comida temperatura adecuada',
            'codigo_interno' => 'v28',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_31
        Columnas::create(array(
            'codigo' => 'COMIDA_PRESENTACION',
            'descripcion' => 'Comida buena presentación',
            'codigo_interno' => 'v29',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_32
        Columnas::create(array(
            'codigo' => 'COMIDA_MENU_EQUILIBRADO',
            'descripcion' => 'Comida Menú diario Equilibrado',
            'codigo_interno' => 'v30',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_33
        Columnas::create(array(
            'codigo' => 'COMIDA_PUNTUAL',
            'descripcion' => 'Comida se sirve puntual',
            'codigo_interno' => 'v31',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_34
        Columnas::create(array(
            'codigo' => 'COMIDA_VARIADA',
            'descripcion' => 'Comida variada para diferentes dietas',
            'codigo_interno' => 'v32',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_35
        Columnas::create(array(
            'codigo' => 'COMIDA_INFO_ANTELACION',
            'descripcion' => 'Comida información menús semanales con antelación',
            'codigo_interno' => 'v33',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_35
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_COMIDA',
            'descripcion' => 'Comida',
            'codigo_interno' => 'v34',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));


        // columna_36
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_TEMPERATURA',
            'descripcion' => 'Temperatura',
            'codigo_interno' => 'v35',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));


        // columna_37
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_TRATO',
            'descripcion' => 'Trato',
            'codigo_interno' => 'v36',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_38
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_PERSONAL',
            'descripcion' => 'Personal',
            'codigo_interno' => 'v37',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_39
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_AVERIAS',
            'descripcion' => 'Averias',
            'codigo_interno' => 'v38',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_40
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_PERSONALES',
            'descripcion' => 'Personales',
            'codigo_interno' => 'v39',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_41
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_LIMPIEZA',
            'descripcion' => 'Limpieza',
            'codigo_interno' => 'v40',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

          // columna_42
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_LAVANDERIA',
            'descripcion' => 'Lavanderia',
            'codigo_interno' => 'v41',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_43
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_ACTIVIDADES',
            'descripcion' => 'Actividades',
            'codigo_interno' => 'v42',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));

        // columna_44
        Columnas::create(array(
            'codigo' => 'SUGERENCIA_VARIOS',
            'descripcion' => 'Comida',
            'codigo_interno' => 'v43',
            'tipo_columna' => 'v',
            'id_empresa' => 1
        ));









    }
}