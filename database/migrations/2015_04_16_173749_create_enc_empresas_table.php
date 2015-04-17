<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncEmpresasTable extends Migration {

	public function up()
	{
		Schema::create('enc_empresas', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('enc_empresas');
	}
}