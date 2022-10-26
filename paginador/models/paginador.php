<?php
    require "config.php";
    $query = "SELECT * FROM mascotas";
    $result =   mysqli_query($con,$query);
    if(!$result){
        die("Error de la 1° consulta");
    }
    /*Datos Importantes */
    $cant_filas = mysqli_num_rows($result);
    $pagActual = (isset($_GET["pag"]))? $_GET["pag"]: 1;
    $query .= " LIMIT " . cant_reg * ($pagActual - 1).",". cant_reg;
    $result2 = mysqli_query($con, $query);
    if(!$result2){
        die("Error de la 2° consulta");
    }
    $mascotas = mysqli_fetch_all($result2,MYSQLI_ASSOC);
    $cant_pags = ceil($cant_filas/cant_reg);
    /* js */
    if(isset($_GET["pag"])){
        $datos = [
            "mascotas" => $mascotas,
            "cantPags" => $cant_pags,
            "pagActual" => $_GET["pag"],
            "cant_reg"=> cant_reg,
            "cant_pestañas"=> pestañas
        ];
        echo json_encode($datos);
    }
?>