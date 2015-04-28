<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Encuestas_preguntas extends Model {

	protected $table = 'enc_encuestas_preguntas';
	public $timestamps = true;

	public function preguntas_opciones()
	{
		return $this->hasMany('encuestas\Respuestas_posibles', 'id_pregunta');
	}

	public function preguntas_respuestas()
	{
		return $this->hasMany('encuestas\Respuestas_preguntas', 'id_pregunta');
	}

}