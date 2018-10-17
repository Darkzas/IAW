var month = getMonth();
var resultado = '';

if (month === 1 || month === 2 || month === 3) {
    resultado = '1st';
} else if (month === 4 || month === 5 || month === 6) {
    resultado = '2nd';
} else if (month === 7 || month === 8 || month === 9) {
    resultado = '3rd';
} else if (month === 10 || month === 11 || month === 12) {
    resultado = '4th';
}

document.getElementById('resultado').innerHTML = 'We are at ' + resultado + ' term.';

function getMonth() {
    return new Date().getMonth() + 1;
}