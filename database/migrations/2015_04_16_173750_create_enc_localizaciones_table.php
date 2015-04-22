<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncLocalizacionesTable extends Migration {

	public function up()
	{
		Schema::create('enc_localizaciones', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_padre')->default(0);
			$table->integer('id_empresa')->unsigned();
			$table->string('nombre');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_localizaciones');
	}
}