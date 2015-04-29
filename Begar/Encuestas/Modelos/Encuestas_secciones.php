<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Encuestas_secciones extends Model {

	protected $table = 'enc_encuestas_secciones';
	public $timestamps = true;

	public function preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Encuestas_preguntas', 'id_seccion');
	}

	public function encuesta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Encuestas', 'id_encuesta');
	}

}