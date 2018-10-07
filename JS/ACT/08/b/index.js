var firstNumber = parseInt(prompt('Introduce el primer número'));
var secondNumber = parseInt(prompt('Introduce el segundo número'));
var thirdNumber = parseInt(prompt('Introduce el tercer número'));

var resultado = 'Some numbers are equal or more than 10';

if (firstNumber < 10 && secondNumber < 10 && thirdNumber < 10) {
    resultado = 'All the numbers are less than 10';
}

document.getElementById('resultado').innerHTML = resultado;