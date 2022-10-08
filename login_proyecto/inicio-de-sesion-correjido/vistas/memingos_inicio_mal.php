<div class="modal">
    <div id="contenido">
        <a href="javascript:cerrar()"><img src="imagenes/x.png" id="im3"></a>
        <img src="imagenes/logoMemingos.png" id="im2">
        <form method="POST" action="php/ver_inicio.php">
            <div class="nombre">
                <input type="text" required placeholder="correo electronico" id="mail" name="email">
            </div>
            <div class="nombre">
                <input type="password" required placeholder="contrasena" id="clave" name="clave">
            </div>
            <div class="err" id="err_cla">Verifique los datos ingresados</div>
            <div class="recordar">No recuerdas tu contrasena</div>
            <input type="submit" id="inicio" value="iniciar sesion" onclick="javascript:inicio()">
            <div class="registrarse">
                No tienes una cuenta? <a href="#">Registrate</a>
            </div>
        </form>
    </div>
</div>