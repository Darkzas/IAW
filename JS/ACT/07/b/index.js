var firstNumber = parseInt(prompt('Introduce el primer número'));
var secondNumber = parseInt(prompt('Introduce el segundo número'));
var thirdNumber = parseInt(prompt('Introduce el tercer número'));

var resultado = null;

if (firstNumber < secondNumber && firstNumber < thirdNumber) {
    resultado = firstNumber;
} else if (secondNumber < firstNumber && secondNumber < thirdNumber) {
    resultado = secondNumber;
} else {
    resultado = thirdNumber;
}

document.getElementById('resultado').innerHTML = resultado;