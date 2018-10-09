var number = parseInt(prompt('Introduce un número (1 al 12)'));
var resultado = '';

switch (number) {
    case 1:
        resultado = 'January: 31';
        break;
    case 2:
        resultado = 'February: 28';
        break;
    case 3:
        resultado = 'March: 31';
        break;
    case 4:
        resultado = 'April: 30';
        break;
    case 5:
        resultado = 'May: 31';
        break;
    case 6:
        resultado = 'June: 30';
        break;
    case 7:
        resultado = 'July: 31';
        break;
    case 8:
        resultado = 'August: 31';
        break;
    case 9:
        resultado = 'September: 30';
        break;
    case 10:
        resultado = 'October: 31';
        break;
    case 11:
        resultado = 'November: 30';
        break;
    case 12:
        resultado = 'December: 31';
        break;
    default:
        resultado = 'No has introducido un número correcto'
}

document.getElementById('resultado').innerHTML = resultado;