<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncRespuestasPreguntasTable extends Migration {

	public function up()
	{
		Schema::create('enc_respuestas_preguntas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_respuesta')->unsigned();
			$table->integer('id_pregunta')->unsigned();
			$table->string('valor', 200)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_respuestas_preguntas');
	}
}