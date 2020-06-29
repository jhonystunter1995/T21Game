<?php

function getRoleUserArray($mode, $id){
    $roles = ['0' => 'Usuario', '1' => 'Administrador'];
    if(!is_null($mode)):
        return $roles;
    else:
        return $roles[$id];
    endif;
}

function getUserStatusArray($mode, $id){
    $status = ['0' => 'Registrado', '1' => 'Verificado', '100' => 'Inhabilitado'];
    if(!is_null($mode)):
        return $status;
    else:
        return $status[$id];
    endif;
    
}