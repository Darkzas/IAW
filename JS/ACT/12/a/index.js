var biggerTriangles = 0;

for (var i = 1; i <= 3; i++) {
    var base = parseInt(prompt('Introduce la base del triángulo ' + i));
    var height = parseInt(prompt('Introduce la altura del triángulo ' + i));
    var area = base * height / 2;

    if (area > 12) {
        biggerTriangles++;
    }
}

document.getElementById('resultado').innerHTML = '' +
    'Hay ' + biggerTriangles + ' triángulos con el area mayor ' +
    'que 12.';