var number = parseInt(prompt('Introduce un número (1 al 12)'));
var resultado = '';

switch (number) {
    case 1:
        resultado = 'January';
        break;
    case 2:
        resultado = 'February';
        break;
    case 3:
        resultado = 'March';
        break;
    case 4:
        resultado = 'April';
        break;
    case 5:
        resultado = 'May';
        break;
    case 6:
        resultado = 'June';
        break;
    case 7:
        resultado = 'July';
        break;
    case 8:
        resultado = 'August';
        break;
    case 9:
        resultado = 'September';
        break;
    case 10:
        resultado = 'October';
        break;
    case 11:
        resultado = 'November';
        break;
    case 12:
        resultado = 'December';
        break;
    default:
        resultado = 'No has introducido un número correcto'
}

document.getElementById('resultado').innerHTML = resultado;