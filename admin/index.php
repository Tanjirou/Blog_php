<?php
    session_start();
    //Index del admin
    require_once('config.php');
    require_once('../functions.php');

    $conexion = conexion($bd_config);
    //comprobar si inicio sesion

    comprobarSesion();

    if(!$conexion){
        header('Location: ../error.php');
    }

    $posts = obtener_post($blog_config['post_por_pagina'],$conexion);
    
    require_once('admin_index_view.php');

?>