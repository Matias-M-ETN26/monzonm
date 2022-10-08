<?php
    include_once '../config.php';
    $emailV =$_POST['email'];
    $claveV =$_POST['clave'];
    $validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$emailV' AND clave='$claveV'");
        if(mysqli_num_rows($validar_login) > 0){
            header("location: ../pagina_principal.php");
            exit;
        }else{
            /*echo("<script>window.location='../inicio_mal.php'</script>");*/
            header("location: ../inicio_mal.php");
            exit;
        }
?>