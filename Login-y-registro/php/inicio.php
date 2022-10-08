<?php
    session_start();
    include'config.php';
    $emailV = $_POST["emailV"];
    $claveV = $_POST["claveV"];
    $validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$emailV' AND clave='$claveV'");
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION["usuario"] =$emailV;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo ("<script>
            alert('error');
            window.location='../index.php';
        </script>");
        exit;
    }


?>