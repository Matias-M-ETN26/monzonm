<?php
include 'config.php';

$nombreUsuario = $_POST['nombreUsuario'];
$emailR = $_POST['emailR'];
$claveR = $_POST['claveR'];
$query = "INSERT INTO usuarios(nombreUsuario, email, clave) 
    VALUES('$nombreUsuario','$emailR','$claveR')";

$verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$emailR'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo ("<script>
            alert('error');
            window.location='../index.php';
        
        </script>");
    exit();
}
$verificar_nombre = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombreUsuario='$nombreUsuario'");
if (mysqli_num_rows($verificar_nombre) > 0) {
    echo ("<script>
            alert('error');
            window.location='../index.php';
        
        </script>");
    exit();
}

$ejecutar = mysqli_query($conn, $query);
mysqli_close($conn);
