var phrase = prompt('Introduce una frase');
var words = phrase.split(' ');
var resultado = words.join('<br/>');

document.getElementById('resultado').innerHTML = resultado;