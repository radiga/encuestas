<?php
/**
* Language file for encuesta error/success messages
*
*/

return array(

    'empresa_exists'        => 'la encuesta ya existe!',
    'empresa_not_found'     => 'La encuesta [:id] no existe.',
    'empresa_name_required' => 'El campo es obligatorio',

    'success' => array(
        'create' => 'La encuesta fue creada correctamente.',
        'update' => 'La encuesta fue actualizada correctamente.',
        'delete' => 'La encuesta fue borrada correctamente.',
    ),

    'delete' => array(
        'create' => 'ha habido un problema al crer la encuesta, por favor intentelo de nuevo más tarde.',
        'update' => 'ha habido un problema al actualizar la encuesta, por favor intentelo de nuevo más tarde.',
        'delete' => 'ha habido un problema al borrar la encuesta, por favor intentelo de nuevo más tarde.',
    ),

    'error' => array(
        'empresa_exists' => 'la encuesta ya existe con ese nombre. Los nombres de encuesta deben ser unicos',
    ),

);
