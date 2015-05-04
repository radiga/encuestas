<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncEncuestasTable extends Migration {

	public function up()
	{
		Schema::create('enc_encuestas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_empresa')->unsigned();
			$table->string('titulo', 200);
			$table->string('descripcion')->nullable();
			$table->string('bienvenida')->nullable();
			$table->string('despedida')->nullable();
			$table->string('url')->nullable();
			$table->string('url_descripcion')->nullable();
			$table->boolean('activa')->default(false);
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_fin')->nullable();
			$table->boolean('anonima')->default(true);
            $table->integer('entregadas')->nullable()->default('0');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_encuestas');
	}
}