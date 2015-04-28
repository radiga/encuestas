<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model {

	protected $table = 'enc_respuestas';
	public $timestamps = true;

	public function respuestas_preguntas()
	{
		return $this->hasMany('encuestas\Respuestas_preguntas', 'id_respuesta');
	}

}