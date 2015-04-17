<?php

use Illuminate\Database\Eloquent\Model;

class Categorias_preguntas extends Model {

	protected $table = 'enc_categorias_preguntas';
	public $timestamps = true;

	public function categoria_plantilla()
	{
		return $this->hasMany('encuestas\Categorias_plantillas', 'id_categoria');
	}

}