<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncPlantRespuestasPosiblesTable extends Migration {

	public function up()
	{
		Schema::create('enc_plant_respuestas_posibles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_plantilla')->unsigned();
			$table->string('etiqueta', 100);
			$table->string('valor');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_plant_respuestas_posibles');
	}
}