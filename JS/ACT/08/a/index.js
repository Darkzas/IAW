var day = parseInt(prompt('Introduce un día'));
var month = parseInt(prompt('Introduce un mes')) - 1;
var year = parseInt(prompt('Introduce un año'));
var d = new Date(year, month, day);
var dateFormatted = d.getYear() + '-' + (d.getMonth() + 1 ) + '-' + d.getDate();
var thisYearChristmas = new Date().getYear() + '-12-25';
var resultado = 'Today is not Christmas';

if (dateFormatted === thisYearChristmas) {
    resultado = 'Today is Christmas';
}

document.getElementById('resultado').innerHTML = resultado;