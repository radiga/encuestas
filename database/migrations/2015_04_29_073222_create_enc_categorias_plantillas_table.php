<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncCategoriasPlantillasTable extends Migration {

	public function up()
	{
		Schema::create('enc_categorias_plantillas', function(Blueprint $table) {
            $table->integer('id_categoria')->unsigned()->index();
            $table->integer('id_plantilla')->unsigned()->index();
            $table->integer('orden')->nullable()->index()->default('5');

		});
	}

	public function down()
	{
		Schema::drop('enc_categorias_plantillas');
	}
}