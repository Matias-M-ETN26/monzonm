function abrir(){
    div = document.getElementById("div");
    if(div.style.display == "none"){
        div.style.display = "block";
    }else if(div.style.display == "block"){
        div.style.display = "none";
    }
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