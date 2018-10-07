var number = parseInt(prompt('Introduce un número entre 0 y 999'));

if (number >= 0 && number <= 999) {
    var contador = 0;

    if (number >= 0 && number <= 9) {
        contador = 1;
    } else if (number > 9 && number <= 99) {
        contador = 2;
    } else if (number > 99 && number <= 999) {
        contador = 3;
    }

    document.getElementById('number').innerHTML = 'Hay ' + contador + ' números.';
} else {
    alert('No has introducido un número entre 0 y 999');
}