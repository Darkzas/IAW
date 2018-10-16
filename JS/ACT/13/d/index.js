var number = parseInt(prompt('Introduce un número'));

document.getElementById('resultado').innerHTML = "Tiene " + numberLength(number) + " dígitos";

function numberLength(number) {
    return number.toString().length;
}