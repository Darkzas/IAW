var contador = 1;
var people = 5;
var totalHeight = 0;

while (contador <= people) {
    var height = parseInt(prompt('Introduce el peso de la persona ' + contador));

    if (height >= 0) {
        totalHeight += height;
        contador++;
    } else {
        alert('Peso erróneo, vuelve a introducirlo');
    }
}

totalHeight /= people;

document.getElementById('resultado').innerHTML = 'Media peso: ' + totalHeight;