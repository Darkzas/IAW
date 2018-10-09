var contador = 1;

document.writeln('<p>');

while (contador <= 50) {
    document.writeln(contador);

    contador++;
}

document.writeln('</p>' +
    '<br/>');

contador = 50;

document.writeln('<p>');

while (contador >= 1) {
    document.writeln(contador);

    contador--;
}

document.writeln('</p>' +
    '<br/>');

var contador = -50;

document.writeln('<p>');

while (contador <= 0) {
    document.writeln(contador);

    contador++;
}

document.writeln('</p>' +
    '<br/>');