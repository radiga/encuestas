<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Columnas extends Model {

	protected $table = 'enc_columnas';
	public $timestamps = true;

	public function preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Encuestas_preguntas', 'id_columna');
	}

}