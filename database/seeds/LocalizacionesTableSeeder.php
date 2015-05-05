<?php


use Illuminate\Database\Seeder;
use Begar\Encuestas\Modelos\Localizaciones;

class LocalizacionesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('enc_localizaciones')->delete();
// Loc_01
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'Madrid',
            'id_padre' => '0'
        ));

        // Loc_02
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'Toledo'
        ));

        // Loc_03
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'Aragón'
        ));

        // Loc_04
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'Soria'
        ));

        // Loc_05
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'León'
        ));

        // Loc_06
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'Valladolid'
        ));

        // Loc_07
        Localizaciones::create(array(
            'id_empresa' => 1,
            'nombre' => 'Ávila'
        ));

        // Loc_08
        Localizaciones::create(array(
            'id_padre' => 1,
            'id_empresa' => 1,
            'nombre' => 'Peñuelas',
            'numero_total' => 220,
            'numero_posible' => 219
        ));

        // Loc_09
        Localizaciones::create(array(
            'id_padre' => 1,
            'id_empresa' => 1,
            'nombre' => 'Vallecas',
            'numero_total' => 160,
            'numero_posible' => 156
        ));

        // Loc_10
        Localizaciones::create(array(
            'id_padre' => 1,
            'id_empresa' => 1,
            'nombre' => 'Isabel La Católica',
            'numero_total' => 178,
            'numero_posible' => 173
        ));

        // Loc_11
        Localizaciones::create(array(
            'id_padre' => 2,
            'id_empresa' => 1,
            'nombre' => 'Mora',
            'numero_total' => 120
        ));

        // Loc_12
        Localizaciones::create(array(
            'id_padre' => 3,
            'id_empresa' => 1,
            'nombre' => 'Zaragoza',
            'numero_total' => 206
        ));

        // Loc_13
        Localizaciones::create(array(
            'id_padre' => 4,
            'id_empresa' => 1,
            'nombre' => 'San Esteban',
            'numero_total' => 90
        ));

        // Loc_14
        Localizaciones::create(array(
            'id_padre' => 5,
            'id_empresa' => 1,
            'nombre' => 'Santo Martino',
            'numero_total' => 90
        ));

        // Loc_15
        Localizaciones::create(array(
            'id_padre' => 5,
            'id_empresa' => 1,
            'nombre' => 'Toreno',
            'numero_total' => 88,
            'numero_posible' => 83
        ));

        // Loc_16
        Localizaciones::create(array(
            'id_padre' => 5,
            'id_empresa' => 1,
            'nombre' => 'Villablino',
            'numero_total' => 80
        ));

        // Loc_17
        Localizaciones::create(array(
            'id_padre' => 5,
            'id_empresa' => 1,
            'nombre' => 'Puente Domingo Florez',
            'numero_total' => 64
        ));

        // Loc_18
        Localizaciones::create(array(
            'id_padre' => 5,
            'id_empresa' => 1,
            'nombre' => 'La Pola',
            'numero_total' => 149,
            'numero_posible' => 134
        ));

        // Loc_19
        Localizaciones::create(array(
            'id_padre' => 6,
            'id_empresa' => 1,
            'nombre' => 'Tordesillas',
            'numero_total' => 64
        ));

        // Loc_20
        Localizaciones::create(array(
            'id_padre' => 7,
            'id_empresa' => 1,
            'nombre' => 'Avila',
            'numero_total' => 40,
            'numero_posible' => 17
        ));
	}
}