var a = parseInt(prompt('Introduce el primer número'));
var b = parseInt(prompt('Introduce el segundo número'));
var c = parseInt(prompt('Introduce el tercer número'));

document.getElementById('resultado').innerHTML = "Average: " + avg(a, b, c);

function avg(a, b, c) {
    return (a + b + c) / 3;
}