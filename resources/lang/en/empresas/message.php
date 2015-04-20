<?php
/**
* Language file for empresa error/success messages
*
*/

return array(

    'empresa_exists'        => 'la empresa ya existe!',
    'empresa_not_found'     => 'empresa [:id] does not exist.',
    'empresa_name_required' => 'The name field is required',

    'success' => array(
        'create' => 'empresa was successfully created.',
        'update' => 'empresa was successfully updated.',
        'delete' => 'empresa was successfully deleted.',
    ),

    'delete' => array(
        'create' => 'There was an issue creating the empresa. Please try again.',
        'update' => 'There was an issue updating the empresa. Please try again.',
        'delete' => 'There was an issue deleting the empresa. Please try again.',
    ),

    'error' => array(
        'empresa_exists' => 'A empresa already exists with that name, names must be unique for empresas.',
    ),

);
