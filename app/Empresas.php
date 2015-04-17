<?php

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model {

    protected $table = 'enc_empresas';
    public $timestamps = true;

    public function empresas_localizaciones()
    {
        return $this->hasMany('encuestas\Localizaciones', 'id_empresa');
    }

    public function Empresas_Categorias_Preguntas()
    {
        return $this->hasMany('encuestas\Categorias_preguntas', 'id_empresa');
    }

    public function empresas_encuestas()
    {
        return $this->hasMany('encuestas\Encuestas', 'id_empresa');
    }

    public function empresas_Plantillas_Preguntas()
    {
        return $this->hasMany('encuestas\Plantillas_preguntas', 'id_empresa');
    }

}