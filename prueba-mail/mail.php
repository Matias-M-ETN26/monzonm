<?php

include "config.php";
$email = $_POST["mail"];
$query= "SELECT nombreUsuario FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$usuario = mysqli_fetch_assoc($result);

    $clave = random_int(100000, 999999);
    $mail = $_POST["mail"];
    $destinatario = $mail; 
    $asunto = $_POST["asunto"] . "\r\n"; 
    $cuerpo = '<html><body>';
    $cuerpo .='<div style="
    position: absolute; 
    left:30%; 
    font-family: "calibri";
    background-color: #070707cc;
    border: 1px solid #070707;
    border-radius:10px;
    padding:10px;
    color:white;
    ">
    <img src="https://i.pinimg.com/564x/89/f4/d1/89f4d1502091dd469e385bb3d4117e9c.jpg" width="100px" height="100px">
    <h3>Hola '.$usuario["nombreUsuario"].'<br>
    <br>
    Recibimos una solicitud para restablecer tu clave de Memingos.<br>
    Ingresa el siguiente codigo para restablecer la clave:<br>
    <br>
    <span style="border: 1px solid #00bbff;background-color:#00bbff38;padding:10px 20px; border-radius: 10px;">'.$clave.'</span>
    </h3>Si no quieres cambiar la clave, simplemente ignore este correo.<br>Atte.: <b>Torres y Asociados<b></div>';
    $cuerpo .='</body></html>';
    $headers = "Content-type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: Torres Y Asociados <memingos.etn26@gmail.com>\r\n";
    mail($destinatario,$asunto,$cuerpo,$headers);
?>