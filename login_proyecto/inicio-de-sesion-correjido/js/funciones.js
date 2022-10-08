function abrir(){
    fondo=document.getElementById("fondo");
    div = document.getElementById("contenido");
    div.style.display = "block";
    div.style.animationName = "afuera";
    setTimeout(function () {div.style.display = "block" }, 745);
    fondo.style.animationName = "oscuro";
    setTimeout(function () {fondo.style.background = "rgba(0, 0, 0, 0.75)" }, 745);
}
function cerrar(){
    fondo=document.getElementById("fondo");
    div = document.getElementById("contenido");
    setTimeout(function () {div.style.display = "none" }, 745);
    div.style.animationName = "adentro";
    fondo.style.animationName = "claro";
    setTimeout(function () {fondo.style.background = "rgba(0, 0, 0, 0)" }, 745);
    
}
function inicio() {
    var email = document.getElementById("mail").value;
    var clave = document.getElementById("clave").value;
    var a = email.split("@");
    if (email.length != 0) {
        if (a[1] == "gmail.com") {
            document.getElementById("err_mail").style.display = "none";
            document.getElementById("mail").style.border = "none";
        } else if (a[1] == "hotmail.com") {
            document.getElementById("err_mail").style.display = "none";
            document.getElementById("mail").style.border = "none";
        } else if (a[1] == "outlook.com") {
            document.getElementById("err_mail").style.display = "none";
            document.getElementById("mail").style.border = "none";
        } else if (a[1] == "adinet.com") {
            document.getElementById("err_mail").style.display = "none";
        } else if (a[1] == "vera.com") {
            document.getElementById("err_mail").style.display = "none";
            document.getElementById("mail").style.border = "none";
        } else if (a[1] == "yahoo.com") {
            document.getElementById("err_mail").style.display = "none";
            document.getElementById("mail").style.border = "none";
        } else {
            document.getElementById("err_mail").style.display = "block";
            document.getElementById("mail").style.border = "2px solid red";
        }
    }
    /*comprobar clave */
    if (clave.length == 0) {
        document.getElementById("err_cla").style.display = "none";
        document.getElementById("clave").style.border = "none";
    } else if (clave.length < 6) {
        document.getElementById("err_cla").style.display = "block";
        document.getElementById("clave").style.border = "2px solid red";
    } else if (clave.length >= 6) {
        document.getElementById("err_cla").style.display = "none";
        document.getElementById("clave").style.border = "none";
        
    }
}