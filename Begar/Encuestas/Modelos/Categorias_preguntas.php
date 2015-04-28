<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Categorias_preguntas extends Model {

	protected $table = 'enc_categorias_preguntas';
	public $timestamps = true;

	public function categorias_plantillas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Categorias_plantillas', 'id_categoria');
	}

	public function empresa()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Empresas', 'id_empresa');
	}

}