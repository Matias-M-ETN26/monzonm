<?php
include "config.php";
$email = "monzon@gmail.com";
$query= "SELECT nombreUsuario FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$usuario = mysqli_fetch_assoc($result);
?>
<html>

<body>
    <div style="
    position: absolute; 
    left:30%; 
    font-family: 'calibri';
    background-color: #070707cc;
    border: 1px solid #070707;
    border-radius:10px;
    padding:10px;
    color:white;
    ">
        <img src="https://lh3.googleusercontent.com/r_pO7GtvkipxgDQRq5nynOO9OUAQCFcG5ZzTuS25gVAAfRh7agEeSmR2Zqu4JDKe7OPoVhpvrurXiHjCqJmyxzjLnbzDGLvlIHyR8iH9hrKnMGqfGMYzIRi6jQ1rvhLLCINxt0ZSz24CxvrO36PVrWOMrNkodEX08LuJZcB88Z1lcXZmAawGyjgw-gCXUzPa2sfzoIVQ7BAlbdzneiseJb617N11XUHGd0n-XPns-fEZmj2OLCvYo4mfupJcLYes7qhjYSDSXQ1XLGih6njIYIGAj_mLo7sp0Gv5dum19lc5qBaGXzXrALxXDnLptziX_cZ7wXUayWjKHdejeDoJb_oluDRlRkEhFf54vhK2mabo_RxzKR7LH4MoE45bF3dUAfDDwFkHCrLZ_LBLIab3aJha2UFzMr-tCsAX5hmIbq4fLBUCW8ratN7plLDT3bQHKSRjp5UNqpbz92B_igs3gtVvnzmL_UPG7PdrotMsmAvLoTU_QPB_ghVhNtWFB4LhbwsojHFn4N-RTnvQUCt2CNy4FYE6he7WU16nWXf_vJlpKzk3DySa4y5FVg9Mc8U3fSaL13LmP8CnMmpBdcaj1edRmdhhgEctpqgD-N1NSTY4RJTvcEtyvl5U8Ove139Y7yfGP9u1KfgX2404Ii8SdpPUfxeluTgodmWL5JV9QUjLujKOzj4yPKtQ03akmv9CDql7BJZg2jzxceZZHOChu_rYVrrWFIXp55rKO3ScgmTBTRMy5v4FIsm7wd_R-EpQ-P1KdtVct1t6kmbmyorzpmCYnSYPkGtvjhuMpEdYyeMO1xUcy540KHOQINHOyOX34-LxOcfjPJPepF66dl3jALQSIXPW5592VqmrCLdwVJh-r290Buy1zIzSbehH5JG4HSrCByXDrlRU=w512-h506-no?authuser=3" width="100px" height="100px">
        <h3>Hola <?php echo($usuario['nombreUsuario']); ?> <br>
            <br>
            Recibimos una solicitud para restablecer tu clave de Memingos.<br>
            Ingresa el siguiente codigo para restablecer la clave:<br>
            <br>
            <span style="border: 1px solid #00bbff;background-color:#00bbff38;padding:10px 20px; border-radius: 10px;">23098</span>
        </h3>
        
        Si no quieres cambiar la clave, simplemente ignore este correo.<br>
        Atte.: <b>Torres y Asociados<b>
    </div>
</body>

</html>