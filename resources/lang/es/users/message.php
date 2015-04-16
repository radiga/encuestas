<?php
/**
* Language file for user error/success messages
*
*/

return array(

    'user_exists'              => 'El usuario ya existe!',
    'user_not_found'           => 'El usuario [:id] no existe',
    'user_login_required'      => 'El campo login es obligatorio',
    'user_password_required'   => 'La contraseña es obligatoria.',
    'insufficient_permissions' => 'Insuficientes Permisos.',
    'banned'              => 'prohibido',
    'suspended'             => 'suspendido',

    'success' => array(
        'create'    => 'El usuario fue creado correctamente.',
        'update'    => 'El usuario fue actualizado correctamente.',
        'delete'    => 'El usuario fue borrado correctamente.',
        'ban'       => 'El usuario fue prohibido correctamente.',
        'unban'     => 'El usuario fue admitido correctamente.',
        'suspend'   => 'El usuario fue suspendido correctamente.',
        'unsuspend' => 'El usuario fue aprobado correctamente.',
        'restored'  => 'El usuario fue restaurado correctamente.',
    ),

    'error' => array(
        'create'    => 'Ha habido un problema al crear el usuario. Por favor, vuelva a intentarlo.',
        'update'    => 'Ha habido un problema al actualizar el usuario. Por favor, vuelva a intentarlo.',
        'delete'    => 'Ha habido un problema al borrar el usuario. Por favor, vuelva a intentarlo.',
        'unsuspend' => 'Ha habido un problema al aprobar el usuario. Por favor, vuelva a intentarlo.',
    ),

);
