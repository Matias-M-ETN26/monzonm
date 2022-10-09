<?php
    define('RUTA', '/monzonm/paginador');
    define('cant_reg',5);
    $con = mysqli_connect('localhost', 'root', '', 'memingos');
    if (!$con) {
        die('Error de Conexion');
    }
?>