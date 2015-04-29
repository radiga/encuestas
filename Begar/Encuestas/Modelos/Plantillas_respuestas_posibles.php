<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Plantillas_respuestas_posibles extends Model {

	protected $table = 'enc_plant_respuestas_posibles';
	public $timestamps = true;

	public function plantilla_pregunta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Plantillas_preguntas', 'id_plantilla');
	}

}