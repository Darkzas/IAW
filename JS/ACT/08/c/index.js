var x = parseInt(prompt('Introduce la x'));
var y = parseInt(prompt('Introduce la y'));
var resultado = '';

if (x > 0 && y > 0) {
    resultado = 'First Quadrant';
} else if (x < 0 && y > 0) {
    resultado = 'Second Quadrant';
} else if (x < 0 && y < 0) {
    resultado = 'Third Quadrant';
} else if (x > 0 && y < 0) {
    resultado = 'Fourth Quadrant';
}

document.getElementById('resultado').innerHTML = resultado;