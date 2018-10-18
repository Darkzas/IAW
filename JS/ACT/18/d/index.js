var email = prompt('Introduce un e-mail');
var resultado = "El usuario ";

if (email.indexOf('@') !== -1) {
    resultado += "ha introducido un e-mail correcto: " + email;
} else {
    resultado += "no ha introducido un e-mail correcto: " + email;
}

document.getElementById('resultado').innerHTML = resultado;