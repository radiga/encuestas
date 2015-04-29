<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncRespuestasPreguntasTable extends Migration {

	public function up()
	{
		Schema::create('enc_respuestas_preguntas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_respuesta')->unsigned();
			$table->integer('id_encuesta')->unsigned();
			$table->string('v01', 5)->nullable();
			$table->string('v02', 5)->nullable();
			$table->string('v03', 5)->nullable();
			$table->string('v04', 5)->nullable();
			$table->string('v05', 5)->nullable();
			$table->string('v06', 5)->nullable();
			$table->string('v07', 5)->nullable();
			$table->string('v08', 5)->nullable();
			$table->string('v09', 5)->nullable();
			$table->string('v10', 5)->nullable();
			$table->string('v11', 5)->nullable();
			$table->string('v12', 5)->nullable();
			$table->string('v13', 5)->nullable();
			$table->string('v14', 5)->nullable();
			$table->string('v15', 5)->nullable();
			$table->string('v16', 5)->nullable();
			$table->string('v17', 5)->nullable();
			$table->string('v18', 5)->nullable();
			$table->string('v19', 5)->nullable();
			$table->string('v20', 5)->nullable();
			$table->string('v21', 5)->nullable();
			$table->string('v22', 5)->nullable();
			$table->string('v23', 5)->nullable();
			$table->string('v24', 5)->nullable();
			$table->string('v25', 5)->nullable();
			$table->string('v26', 5)->nullable();
			$table->string('v27', 5)->nullable();
			$table->string('v28', 5)->nullable();
			$table->string('v29', 5)->nullable();
			$table->string('v30', 5)->nullable();
			$table->string('t01', 250)->nullable();
			$table->string('t02', 250)->nullable();
			$table->string('t03', 250)->nullable();
			$table->string('t04', 250)->nullable();
			$table->string('t05', 250)->nullable();
			$table->string('t06', 250)->nullable();
			$table->string('t07', 250)->nullable();
			$table->string('t08', 250)->nullable();
			$table->string('t09', 250)->nullable();
			$table->string('t10', 250)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_respuestas_preguntas');
	}
}