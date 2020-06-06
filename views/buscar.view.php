<?php require('header.php');?>
    <div class="contenedor">
        <h2><?php echo $titulo;?></h2>
        <?php foreach($resultados as $resultado): ?>
        <div class="post">
            <article>
                <h2 class="titulo"><a href="single.php?id=<?php echo $resultado['id'];?>"><?php echo $resultado['titulo'];?></a> </h2>
                <p class="fecha"><?php echo fecha($resultado['fecha']);?></p>
                <div class="thumb">
                    <a href="single.php?id=<?php echo $resultado['id'];?>">
                        <img src="<?php echo RUTA;?>/img/<?php echo $resultado['thumb'];?>" alt="">
                    </a>
                </div>
                <p class="extracto">
                   <?php echo $resultado['extracto'];?>
                </p>
                <a href="single.php?id=<?php echo $resultado['id'];?>" class="continuar">Continuar Leyendo</a>
            </article>
        </div>
        <?php endforeach;?>
        <?php require('paginacion.php');?>
    </div>

    <?php require('footer.php');?>