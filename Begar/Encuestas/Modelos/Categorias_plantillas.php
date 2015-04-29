<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Categorias_plantillas extends Model {

	protected $table = 'enc_categorias_plantillas';
	public $timestamps = false;

	public function categoria_pregunta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Categorias_preguntas', 'id_categoria');
	}

	public function plantilla_pregunta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Plantillas_preguntas', 'id_plantilla');
	}

}