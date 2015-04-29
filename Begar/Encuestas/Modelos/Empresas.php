<?php

namespace Begar\Encuestas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model {

	protected $table = 'enc_empresas';
	public $timestamps = true;

	public function localizaciones()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Localizaciones', 'id_empresa');
	}

	public function categorias_preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Categorias_preguntas', 'id_empresa');
	}

	public function encuestas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Encuestas', 'id_empresa');
	}

	public function plantillas_preguntas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Plantillas_preguntas', 'id_empresa');
	}

	public function columnas()
	{
		return $this->hasMany('Begar\Encuestas\Modelos\Columnas', 'id_empresa');
	}

}