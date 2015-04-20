<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuestas_secciones extends Model {

	protected $table = 'enc_encuestas_secciones';
	public $timestamps = true;

	public function secciones_preguntas()
	{
		return $this->hasMany('encuestas\Encuestas_preguntas', 'id_seccion');
	}

}