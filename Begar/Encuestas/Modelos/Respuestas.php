<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model {

	protected $table = 'enc_respuestas';
	public $timestamps = true;

	public function preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Respuestas_preguntas', 'id_respuesta');
	}

	public function localizacion()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Localizaciones', 'id_localizacion');
	}

	public function encuesta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Encuestas', 'id_encuesta');
	}

}