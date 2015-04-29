<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncColumnasTable extends Migration {

	public function up()
	{
		Schema::create('enc_columnas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_empresa')->unsigned();
			$table->string('codigo', 50)->unique();
			$table->string('descripcion', 150)->nullable();
			$table->string('codigo_interno', 50)->unique();
			$table->string('tipo_columna', 1)->default('v');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_columnas');
	}
}