<html>

<head>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="comentarios">
        <nav>
            <?php
            include "config.php";
            $query ="SELECT * FROM comentarios";
            $result = mysqli_query($conn, $query);
            while($comentario = mysqli_fetch_assoc($result)){?>
            <div class="comentario">
                <?php echo $comentario["contenidoComentario"]; ?>
            </div>
            <?php } ?>
        </nav>
        <div class ="comentar" align="bottom">
            <form method="POST" action="comentarios.php">
                <input type="text" name="comentario">
                <input type="submit">
            </form>
        </div>
    </div>


</body>

</html>