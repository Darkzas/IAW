var names = [];

do {
    var name = prompt('Introduce un nombre, escribe end para cancelar el programa');

    if (name !== 'end') {
        names.push(name);
    }
} while (name !== 'end');

document.getElementById('resultado').innerHTML = 'We typed ' + names.length + ' names.';