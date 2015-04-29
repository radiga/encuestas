<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Plantillas_preguntas extends Model {

	protected $table = 'enc_plantillas_preguntas';
	public $timestamps = true;

	public function plantilla_categoria()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Categorias_plantillas', 'id_plantilla');
	}

	public function plantilla_pregunta_resp_posible()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Plantillas_respuestas_posibles', 'id_plantilla');
	}

	public function tipo_pregunta()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Tipos_preguntas', 'id_tipo');
	}

	public function empresa()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Empresas', 'id_empresa');
	}

}