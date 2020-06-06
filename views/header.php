<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/05b6df59fc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo RUTA;?>/css/estilos.css">
    <title>Blog</title>
</head>
<body>
<header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA;?>">Mi Primer Blog</a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA;?>/buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#">Contacto <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>