var N1 = parseInt(prompt('Introduce el número N1'));
var N2 = parseInt(prompt('Introduce el número N2'));
var resultado = null;

if (N1 > N2) {
    resultado = suma(N1, N2);
} else {
    resultado = resta(N1, N2);
}

document.getElementById('resultado').innerHTML = resultado;

function suma(a, b) {
    return a + b;
}

function resta(a, b) {
    return a - b;
}