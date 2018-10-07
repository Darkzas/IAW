var number = parseInt(prompt('Introduce un número'));
var message = "";

if (number > 0) {
    message = 'Positive Number';
} else if (number === 0) {
    message = 'Zero Number';
} else if (number < 0) {
    message = 'Negative Number';
}

document.getElementById('message').innerHTML = message;