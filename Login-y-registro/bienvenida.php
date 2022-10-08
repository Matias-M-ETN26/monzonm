<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        echo ("<script>
            alert('inicie sesion bruto');
            window.location='index.php';
        </script>");
        session_destroy();
        die();
    }
?>
<html>
    <body>
        <h1>bienvanida</h1>
    </body>
</html>