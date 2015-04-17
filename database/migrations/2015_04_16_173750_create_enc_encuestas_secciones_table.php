<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncEncuestasSeccionesTable extends Migration {

	public function up()
	{
		Schema::create('enc_encuestas_secciones', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_encuesta')->unsigned();
			$table->integer('orden');
			$table->string('nombre', 150);
			$table->string('descripcion')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_encuestas_secciones');
	}
}