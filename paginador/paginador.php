<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginador</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/paginador.js"></script>
</head>

<body>
    <div class="conteiner-principal" id="conteiner-principal">
        <div class="fila-principal">
            <div class="columna">ID</div>
            <div class="columna">Nombre Categoria</div>
            <div class="columna">Fecha Alta</div>
            <div class="columna">Fecha Baja</div>
        </div>
        <?php foreach ($categorias as $categoria) { ?>
            <div class="fila-secundaria">
                <div class="columna"><?php echo $categoria["id"] ?></div>
                <div class="columna"><?php echo $categoria["nombre"] ?></div>
                <div class="columna"><?php echo $categoria["fecha_alta"] ?></div>
                <div class="columna"><?php echo $categoria["fecha_baja"] ?></div>
            </div>
        <?php } ?>
    </div>
    <div class="paginador">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="javascript:paginador();">&laquo;</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="javascript:paginador(1);">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:paginador(2);">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:paginador(3);">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:paginador(4);">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:paginador(5);">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="paginador();">&raquo;</a>
            </li>
        </ul>
    </div>
</body>

</html>