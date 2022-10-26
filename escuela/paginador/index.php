<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginador monzon</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>myFunction(1);</script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="conteiner-principal">
        <div class="conteiner-fila-prin">
            <div class="fila-principal">
                <div class="conteiner primer">
                    ID Rango
                </div>
                <div class="conteiner">
                    Rango
                </div>
                <div class="conteiner">
                    Division
                </div>
                <div class="conteiner ultimo">
                    Oficial o Suboficial
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="conteiner primer datos">1</div>
            <div class="conteiner datos" >mayor</div>
            <div class="conteiner datos division">Ejercito</div>
            <div class="conteiner ultimo datos">Suboficial</div>
        </div>
    
    </div>
    <div class="paginador">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="javascript:myFunction(5);">&laquo;</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="javascript:myFunction(5);">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:myFunction(5);">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:myFunction(5);">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:myFunction(5);">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:myFunction(5);">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:myFunction(5);">&raquo;</a>
            </li>
        </ul>
    </div>
</body>

</html>