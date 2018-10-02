var firstNumber = prompt('Introduce el primer número');
var secondNumber = prompt('Introduce el segundo número');
var thirdNumber = prompt('Introduce el tercer número');
var fourNumber = prompt('Introduce el cuarto número');

var addition = parseInt(firstNumber) + parseInt(secondNumber) + parseInt(thirdNumber) + parseInt(fourNumber);
var product = parseInt(firstNumber) * parseInt(secondNumber) * parseInt(thirdNumber) * parseInt(fourNumber);

document.writeln('La suma de los cuatro números es de ' + addition);
document.writeln('<br>');
document.writeln('La multiplicación de los cuatro números es de ' + product);