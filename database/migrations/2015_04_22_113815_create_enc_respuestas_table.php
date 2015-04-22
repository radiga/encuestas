<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncRespuestasTable extends Migration {

	public function up()
	{
		Schema::create('enc_respuestas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_Localizacion')->unsigned();
			$table->integer('id_encuesta')->unsigned();
			$table->string('token', 50)->nullable();
			$table->date('fecha')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_respuestas');
	}
}