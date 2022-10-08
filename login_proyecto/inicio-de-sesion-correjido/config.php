<?php
    $server = "localhost";
    $user ="root";
    $pass ="";
    $db ="memingos";
    $conn =mysqli_connect($server,$user, $pass, $db);
    if(!$conn){
        die('Error de Conexion');
    }

?>