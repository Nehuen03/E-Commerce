var usuario = document.getElementById("usuario");
var contrasena = document.getElementById("contrasena");
var email = document.getElementById("email");

function ingresar(){
    if (usuario == "" && contraseña == "" && email == ""){
        alert("Campos vacios");
    }
}

function ingresar() {
    var usuario = document.getElementById("usuario");
    var contrasena = document.getElementById("contrasena");
    var email = document.getElementById("email");     

    if (usuario.value == ""){
        alert("Usuario vacio");
    }
    else if (contrasena.value == ""){
        alert("Contrasena vacio");
    }
    else {
        alert("Email vacio");
    }
}