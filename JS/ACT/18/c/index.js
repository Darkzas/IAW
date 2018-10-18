var word = prompt('Introduce una palabra');
var resultado = 'La palabra ' + word + ' ';

if (word.toLowerCase() === word.split('').reverse().join('').toLowerCase()) {
    resultado += 'es palíndroma';
} else {
    resultado += 'no es palíndroma';
}

document.getElementById('resultado').innerHTML = resultado;