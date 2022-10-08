<?php
include "../../config.php";
$emailV =$_POST['email'];
$claveV =$_POST['clave'];
$validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$emailV' AND clave='$claveV'");
    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../pagina_principal.php");
        exit;
    }else{
        echo ("<script>
        /*document.getElementById('err_cla').style.display = 'block';
        document.getElementById('clave').style.border = '2px solid red';*/
        alert('erero');
        window.location='../inicio-de-sesion.php'
        </script>");
        /*header("location: ../inicio-de-sesion.php");*/
        exit;
    }
?>