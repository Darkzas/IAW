var a = parseInt(prompt('Introduce el primer número'));
var b = parseInt(prompt('Introduce el segundo número'));
var c = parseInt(prompt('Introduce el tercer número'));

document.getElementById('resultado').innerHTML = sortByAsc(a, b, c);

function sortByAsc(a, b, c) {
    var resultado = null;

    if (a < b && a < c) {
        resultado = a + " ";

        if (b < c) {
            resultado += b + " " + c;
        } else {
            resultado += c + " " + b;
        }
    } else if (b < a && b < c) {
        resultado = b + " ";

        if (a < c) {
            resultado += a + " " + c;
        } else {
            resultado += c + " " + a;
        }
    } else {
        resultado = c + " ";

        if (a < b) {
            resultado += a + " " + b;
        } else {
            resultado += b + " " + a;
        }
    }

    return resultado;
}