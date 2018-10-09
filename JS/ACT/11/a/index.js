var number = 0;
var totalNumber = 0;
var resultado = '';

do {
    number = parseInt(prompt('Introduce un número'));
    totalNumber += number;
} while (number !== 9999);

if (totalNumber > 0) {
    resultado = 'POSITIVE';
} else if (totalNumber === 0) {
    resultado = 'ZERO';
} else if (totalNumber < 0) {
    resultado = 'NEGATIVE';
}

document.getElementById('resultado').innerHTML = resultado;