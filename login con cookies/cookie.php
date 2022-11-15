<?php
if (isset($_GET["recordar"])) {
    setcookie('user', $_GET['user'], time() + 60);
    setcookie('pass', $_GET['pass'], time() + 60);
    setcookie('recordar', $_GET['recordar'], time() + 60);
    $_COOKIE = $_GET;
} else if (!isset($_GET['recordar']) && (isset($_GET['user']) || isset($_GET['pass']))) {
    setcookie('user', "");
    setcookie('pass', "");
    setcookie('recordar', "");
    unset($_COOKIE);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7264e1a28f.js" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="conteiner">
        <i class="fa-sharp fa-solid fa-right-to-bracket login-icon fa-5x"></i>
        <form method="GET" action="">
            <div class="form-outline mb-4">
                <label class="form-label">Usuario</label>
                <input type="text" id="form1Example1" name="user" class="form-control" value="<?php echo (isset($_COOKIE["user"]) ? $_COOKIE["user"] : ""); ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label">Contraseña</label>
                <input type="password" id="form1Example2" name="pass" class="form-control" value="<?php echo (isset($_COOKIE["pass"]) ? $_COOKIE["pass"] : ""); ?>" />
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="recordar" value="SI" id="flexSwitchCheckDefault" <?php echo (isset($_COOKIE["recordar"]) ? "checked" : ""); ?>>
                <label class="form-check-label" for="flexSwitchCheckDefault">Recordar</label>
            </div>
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>