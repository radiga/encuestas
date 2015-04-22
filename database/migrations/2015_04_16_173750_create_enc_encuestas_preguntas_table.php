<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncEncuestasPreguntasTable extends Migration {

	public function up()
	{
		Schema::create('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_padre')->default(0);
			$table->integer('id_seccion')->unsigned();
			$table->integer('id_tipo')->unsigned();
			$table->string('titulo', 100);
			$table->string('pregunta');
			$table->string('ayuda')->nullable();
			$table->boolean('obligatoria')->default(false);
			$table->string('estilo')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_encuestas_preguntas');
	}
}