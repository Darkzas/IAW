var contador = 1;
var passed = 0;
var failed = 0;

while (contador <= 10) {
    var mark = parseInt(prompt('Introduce la nota del alumno ' + contador));

    if (mark >= 0 && mark <= 10) {
        if (mark >= 5) {
            passed++;
        } else if (mark < 5) {
            failed++;
        }

        contador++;
    } else {
        alert('Nota errónea, vuelve a introducirla');
    }
}

document.getElementById('resultado').innerHTML = 'Hay ' + passed + ' aprobados y ' + failed + ' suspendidos.';