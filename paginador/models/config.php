<?php
    define('RUTA', '/monzonm/paginador');
    define('cant_reg',10);
    define('pestañas',3);
    $con = mysqli_connect('localhost', 'root', '', 'paginador_monzonm');//la base de datos debe llamarse paginador_monzonm o cambiarle el nombre al mysqli_connect
    if (!$con) {
        die('Error de Conexion');
    }
?>