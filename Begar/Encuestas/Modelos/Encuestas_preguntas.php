<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Encuestas_preguntas extends Model {

	protected $table = 'enc_encuestas_preguntas';
	public $timestamps = true;

	public function respuestas_posibles()
	{
		return $this->hasMany('Begar\Encuestas\Respuestas_posibles', 'id_pregunta');
	}

	public function respuestas_preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Respuestas_preguntas', 'id_pregunta');
	}

	public function tipo_pregunta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Tipos_preguntas', 'id_tipo');
	}

	public function seccion()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Encuestas_secciones', 'id_seccion');
	}

	public function columna()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Columnas', 'id_columna');
	}

}