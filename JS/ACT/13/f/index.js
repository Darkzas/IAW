var a = parseInt(prompt('Introduce el primer número'));
var b = parseInt(prompt('Introduce el segundo número'));
var c = parseInt(prompt('Introduce el tercer número'));
var d = parseInt(prompt('Introduce el cuarto número'));
var e = parseInt(prompt('Introduce el quinto número'));

document.getElementById('resultado').innerHTML = "Sum: " + sum(a, b, c, d, e);

function sum(a, b, c, d, e) {
    return a + b + c + d + e;
}