<?php

function getRoleUserArrayKey($id){
    $roles = ['0' => 'Usuario', '1' => 'Administrador'];
    return $roles[$id];
}

function getUserStatusArrayKey($id){
    $status = ['0' => 'Registrado', '1' => 'Verificado', '100' => 'Inhabilitado'];
    return $status[$id];
}