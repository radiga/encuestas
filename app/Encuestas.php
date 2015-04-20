<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model {

    protected $table = 'enc_encuestas';
    public $timestamps = true;

    public function encuestas_secciones()
    {
        return $this->hasMany('encuestas\Encuestas_secciones', 'id_encuesta');
    }

    public function encuestas_respuestas()
    {
        return $this->hasMany('encuestas\Respuestas', 'id_encuesta');
    }

}