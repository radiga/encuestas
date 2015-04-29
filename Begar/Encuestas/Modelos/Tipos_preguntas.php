<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Tipos_preguntas extends Model {

	protected $table = 'enc_tipos_preguntas';
	public $timestamps = true;

	public function tipos_plantillas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Plantillas_preguntas', 'id_tipo');
	}

	public function tipos_encuestas_preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Encuestas_preguntas', 'id_tipo');
	}

}