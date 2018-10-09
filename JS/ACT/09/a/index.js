var word = prompt('Introduce una palabra (house, table, dog, cat)');
var resultado = '';

switch (word) {
    case 'house':
        resultado = 'casa';
        break;
    case 'table':
        resultado = 'mesa';
        break;
    case 'dog':
        resultado = 'perro';
        break;
    case 'cat':
        resultado = 'gato';
        break;
    default:
        resultado = 'No has introducido una palabra correcta';
}

document.getElementById('resultado').innerHTML = resultado;