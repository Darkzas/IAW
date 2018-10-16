var a = parseInt(prompt('Introduce el primer número'));
var b = parseInt(prompt('Introduce el segundo número'));
var c = parseInt(prompt('Introduce el tercer número'));

document.getElementById('resultado').innerHTML = 'El número más pequeño es ' + minimum(a, b, c);

function minimum(a, b, c) {
    var resultado = c;

    if (a < b && a < c) {
        resultado = a;
    } else if (b < a && b < c) {
        resultado = b;
    }

    return resultado;
}