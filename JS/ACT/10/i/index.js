var numberLimit = 5;
var contador = 1;
var pair = 0;
var odd = 0;

while (contador <= numberLimit) {
    var number = parseInt(prompt('Introde el número ' + contador));

    if (number % 2 === 0) {
        pair++;
    } else if (number % 1 === 0) {
        odd++;
    }

    contador++;
}

document.getElementById('resultado').innerHTML = 'Hay ' + pair + ' número pares y ' + odd + ' números impares.';