var sizeVector = parseInt(prompt('Introduce el tamaño de la array'));
var vector = new Array(sizeVector);
var totalSum = 0;

var firstNumber = parseInt(prompt('Introduce el primer número'));
var secondNumber = parseInt(prompt('Introduce el segundo número'));

vector[0] = firstNumber;
vector[1] = secondNumber;

for (var i = 0; i < vector.length; i++) {
    if (!vector[i]) {
        vector[i] = vector[0] + vector[1];
    }

    totalSum += vector[i];
}

document.getElementById('resultado').innerHTML = 'Vector: ' + vector.toString() + '<br/>' +
    'Total sum: ' + totalSum;