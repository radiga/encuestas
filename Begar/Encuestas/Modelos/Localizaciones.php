<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class localizaciones extends Model {

	protected $table = 'enc_localizaciones';
	public $timestamps = true;

	public function localizaciones_respuestas()
	{
		return $this->hasMany('encuestas\Respuestas', 'id_localizacion');
	}

}