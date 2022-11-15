<?php
    require "config.php";
    $query = "SELECT * FROM mascotas";
    $result =   mysqli_query($con,$query);
    if(!$result){
        die("Error de la 1° consulta");
    }
    /*Datos Importantes */
    $cant_filas = mysqli_num_rows($result);
    $pagActual = (isset($_GET["pag"]))? intval($_GET["pag"]): 1;
    $query .= " LIMIT " . cant_reg * ($pagActual - 1).",". cant_reg;
    $result2 = mysqli_query($con, $query);
    if(!$result2){
        die("Error de la 2° consulta Bv");
    }
    $mascotas = mysqli_fetch_all($result2,MYSQLI_ASSOC);
    $cant_pags = ceil($cant_filas/cant_reg);
    $comienzo = ($pagActual - pestañas) <= 0? 1: $pagActual - pestañas;
    $final = ($pagActual + pestañas) > $cant_pags? $cant_pags: $pagActual + pestañas;
?>