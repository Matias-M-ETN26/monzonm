<?php
    include "config.php";
    $comentario = $_POST["comentario"];
    $query = "INSERT INTO comentarios(fechaComentario, contenidoComentario) VALUES (NOW(),'$comentario')";
    mysqli_query($conn, $query);
    header("Location: modelo.php");