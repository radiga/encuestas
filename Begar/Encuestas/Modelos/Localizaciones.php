<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Localizaciones extends Model {

	protected $table = 'enc_localizaciones';
	public $timestamps = true;

	public function respuestas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Respuestas', 'id_localizacion');
	}

	public function empresa()
	{
		return $this->belongsTo('Begar\Encuestas\Modelos\Empresas', 'id_empresa');
	}

}