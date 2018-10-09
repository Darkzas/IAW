var contadorList = 1;
var contadorNumber = 1;
var lists = 2;
var numbers = 3;
var maxList = 0;
var numberMaxList = 0;

while (contadorList <= lists) {
    var totalNumbers = 0;
    contadorNumber = 1;

    while (contadorNumber <= numbers) {
        var number = parseInt(prompt('Introduce el número ' + contadorNumber + ' de la lista ' + contadorList));
        totalNumbers += number;

        contadorNumber++;
    }

    if (totalNumbers >= numberMaxList) {
        maxList = contadorList;
        numberMaxList = totalNumbers;
    }

    contadorList++;
}

document.getElementById('resultado').innerHTML = 'La lista ' + maxList + ' tiene la suma más grande.';