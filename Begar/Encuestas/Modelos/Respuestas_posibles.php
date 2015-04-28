<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuestas_posibles extends Model {

	protected $table = 'enc_respuestas_posibles';
	public $timestamps = true;

	public function encuesta_pregunta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Encuestas_preguntas', 'id_pregunta');
	}

}