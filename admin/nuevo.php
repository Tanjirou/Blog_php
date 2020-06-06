<?php
    session_start();
    require_once('config.php');
    require_once('../functions.php');

    comprobarSesion();
    $conexion = conexion($bd_config);

    if(!$conexion){
        header('Location: ../error.php');
    }

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $titulo = limpiarDatos($_POST['titulo']);
        $extracto = limpiarDatos(($_POST['extracto']));
        $texto = $_POST['texto'];
        $thumb = $_FILES['thumb']['tmp_name'];

        $archivo_subido = '../'.$blog_config['carpeta_imagenes'].$_FILES['thumb']['name'];

        move_uploaded_file($thumb, $archivo_subido);

        $statement = $conexion->prepare(
            'Insert into articulos(id, titulo, extracto, texto, thumb)
            values(null, :titulo, :extracto, :texto, :thumb)'
        );

        $statement->execute(array(
            ':titulo'=> $titulo,
            ':extracto'=> $extracto,
            ':texto' => $texto,
            ':thumb' =>$_FILES['thumb']['name']
        ));

        header('Location: '.RUTA.'/admin');
    }
    require_once('../views/nuevo.view.php');
?>