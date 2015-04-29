<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('enc_localizaciones', function(Blueprint $table) {
			$table->foreign('id_empresa')->references('id')->on('enc_empresas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_categorias_preguntas', function(Blueprint $table) {
			$table->foreign('id_empresa')->references('id')->on('enc_empresas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->foreign('id_empresa')->references('id')->on('enc_empresas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->foreign('id_tipo')->references('id')->on('enc_tipos_preguntas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->foreign('id_columna')->references('id')->on('enc_columnas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_encuestas', function(Blueprint $table) {
			$table->foreign('id_empresa')->references('id')->on('enc_empresas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_categorias_plantillas', function(Blueprint $table) {
			$table->foreign('id_categoria')->references('id')->on('enc_categorias_preguntas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_categorias_plantillas', function(Blueprint $table) {
			$table->foreign('id_plantilla')->references('id')->on('enc_plantillas_preguntas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_encuestas_secciones', function(Blueprint $table) {
			$table->foreign('id_encuesta')->references('id')->on('enc_encuestas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->foreign('id_seccion')->references('id')->on('enc_encuestas_secciones')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->foreign('id_tipo')->references('id')->on('enc_tipos_preguntas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->foreign('id_columna')->references('id')->on('enc_columnas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_respuestas_posibles', function(Blueprint $table) {
			$table->foreign('id_pregunta')->references('id')->on('enc_encuestas_preguntas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_respuestas', function(Blueprint $table) {
			$table->foreign('id_Localizacion')->references('id')->on('enc_localizaciones')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_respuestas', function(Blueprint $table) {
			$table->foreign('id_encuesta')->references('id')->on('enc_encuestas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_respuestas_preguntas', function(Blueprint $table) {
			$table->foreign('id_respuesta')->references('id')->on('enc_respuestas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_respuestas_preguntas', function(Blueprint $table) {
			$table->foreign('id_encuesta')->references('id')->on('enc_encuestas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_plant_respuestas_posibles', function(Blueprint $table) {
			$table->foreign('id_plantilla')->references('id')->on('enc_plantillas_preguntas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('enc_columnas', function(Blueprint $table) {
			$table->foreign('id_empresa')->references('id')->on('enc_empresas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('enc_localizaciones', function(Blueprint $table) {
			$table->dropForeign('enc_localizaciones_id_empresa_foreign');
		});
		Schema::table('enc_categorias_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_categorias_preguntas_id_empresa_foreign');
		});
		Schema::table('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_plantillas_preguntas_id_empresa_foreign');
		});
		Schema::table('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_plantillas_preguntas_id_tipo_foreign');
		});
		Schema::table('enc_plantillas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_plantillas_preguntas_id_columna_foreign');
		});
		Schema::table('enc_encuestas', function(Blueprint $table) {
			$table->dropForeign('enc_encuestas_id_empresa_foreign');
		});
		Schema::table('enc_categorias_plantillas', function(Blueprint $table) {
			$table->dropForeign('enc_categorias_plantillas_id_categoria_foreign');
		});
		Schema::table('enc_categorias_plantillas', function(Blueprint $table) {
			$table->dropForeign('enc_categorias_plantillas_id_plantilla_foreign');
		});
		Schema::table('enc_encuestas_secciones', function(Blueprint $table) {
			$table->dropForeign('enc_encuestas_secciones_id_encuesta_foreign');
		});
		Schema::table('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_encuestas_preguntas_id_seccion_foreign');
		});
		Schema::table('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_encuestas_preguntas_id_tipo_foreign');
		});
		Schema::table('enc_encuestas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_encuestas_preguntas_id_columna_foreign');
		});
		Schema::table('enc_respuestas_posibles', function(Blueprint $table) {
			$table->dropForeign('enc_respuestas_posibles_id_pregunta_foreign');
		});
		Schema::table('enc_respuestas', function(Blueprint $table) {
			$table->dropForeign('enc_respuestas_id_Localizacion_foreign');
		});
		Schema::table('enc_respuestas', function(Blueprint $table) {
			$table->dropForeign('enc_respuestas_id_encuesta_foreign');
		});
		Schema::table('enc_respuestas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_respuestas_preguntas_id_respuesta_foreign');
		});
		Schema::table('enc_respuestas_preguntas', function(Blueprint $table) {
			$table->dropForeign('enc_respuestas_preguntas_id_encuesta_foreign');
		});
		Schema::table('enc_plant_respuestas_posibles', function(Blueprint $table) {
			$table->dropForeign('enc_plant_respuestas_posibles_id_plantilla_foreign');
		});
		Schema::table('enc_columnas', function(Blueprint $table) {
			$table->dropForeign('enc_columnas_id_empresa_foreign');
		});
	}
}