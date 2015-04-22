<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncCategoriasPreguntasTable extends Migration {

	public function up()
	{
		Schema::create('enc_categorias_preguntas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_empresa')->unsigned();
			$table->string('nombre');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_categorias_preguntas');
	}
}