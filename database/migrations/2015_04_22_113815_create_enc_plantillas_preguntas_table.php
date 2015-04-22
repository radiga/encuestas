<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncPlantillasPreguntasTable extends Migration {

	public function up()
	{
		Schema::create('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_padre');
			$table->integer('id_empresa')->unsigned();
			$table->integer('id_tipo')->unsigned();
			$table->string('titulo', 100);
			$table->string('pregunta');
			$table->string('ayuda')->nullable();
			$table->boolean('obligatoria')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_plantillas_preguntas');
	}
}