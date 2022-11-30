<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginador</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="conteiner-principal" id="conteiner-principal">
        <div class="fila-principal">
            <div class="columna">ID</div>
            <div class="columna">Nombre</div>
            <div class="columna">Edad</div>
            <div class="columna">Sexo</div>
        </div>
        <?php foreach ($mascotas as $mascota) { ?>
            <div class="fila-secundaria">
                <div class="columna"><?php echo $mascota["id"] ?></div>
                <div class="columna"><?php echo $mascota["nombre"] ?></div>
                <div class="columna"><?php echo $mascota["edad"] ?></div>
                <div class="columna"><?php echo $mascota["sexo"] ?></div>
            </div>
        <?php } ?>
    </div>
    <div class="paginador">
        <ul class="pagination pagination-sm" id="paginador">
            <?php if (($pagActual - pestañas) > 1) { ?>
                <li class="page-item">
                    <a class="page-link" href="?pag=1">Inicio</a>
                </li>
            <?php } ?>
            <li class="page-item <?php if($pagActual == 1){?>disabled<?php }?>">
                <a class="page-link" href="?pag=<?php echo $pagActual - 1 ?>">&laquo;</a>
            </li>
            <?php for ($i = $comienzo; $i <= $final; $i++) { ?>
                <li class="page-item <?php echo ($i == $pagActual ? "active" : ""); ?>">
                    <a class="page-link" href="?pag=<?php echo $i ?>"><?php echo $i ?></a>
                </li>
            <?php } ?>
            <li class="page-item <?php if($pagActual == $cant_pags){?>disabled<?php }?>">
                <a class="page-link" href="?pag=<?php echo $pagActual + 1 ?>">&raquo;</a>
            </li>
            <?php if (($pagActual + pestañas) < $cant_pags) { ?>
                <li class="page-item">
                    <a class="page-link" href="?pag=<?php echo $cant_pags ?>">Final</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>