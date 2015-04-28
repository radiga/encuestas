<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model {

	protected $table = 'enc_encuestas';
	public $timestamps = true;

	public function secciones()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Encuestas_secciones', 'id_encuesta');
	}

	public function respuestas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Respuestas', 'id_encuesta');
	}

	public function empresa()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Empresas', 'id_empresa');
	}

}