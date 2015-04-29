<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncTiposPreguntasTable extends Migration {

	public function up()
	{
		Schema::create('enc_tipos_preguntas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo', 10)->unique();
			$table->string('nombre');
			$table->string('estilo');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_tipos_preguntas');
	}
}