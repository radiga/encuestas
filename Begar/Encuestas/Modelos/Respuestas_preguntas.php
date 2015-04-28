<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuestas_preguntas extends Model {

	protected $table = 'enc_respuestas_preguntas';
	public $timestamps = true;

	public function respuesta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Respuestas', 'id_respuesta');
	}

	public function encuesta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Encuestas', 'id_encuesta');
	}

}