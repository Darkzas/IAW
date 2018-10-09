var number = parseInt(prompt('Introduce un número entre 1 y 10'));

if (number >= 1 && number <= 10) {
    for (var i = 1; i <= 10; i++) {
        document.writeln(i * number + '<br/>');
    }
} else {
    alert('Número incorrecto');
}