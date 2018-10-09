var letter = prompt('Introduce una letra');
var resultado = '';

switch (letter) {
    case 'a':
    case 'A':
    case 'e':
    case 'E':
    case 'i':
    case 'I':
    case 'o':
    case 'O':
    case 'u':
    case 'U':
        resultado = 'Vowel';
        break;
    default:
        resultado = 'Consonant';
}

document.getElementById('resultado').innerHTML = resultado;