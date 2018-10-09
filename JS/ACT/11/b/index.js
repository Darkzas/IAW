var id = null;
var totalPeople = 0;
var totalMen = 0;
var totalWomen = 0;
var youngMen = 0;
var ageOldestMen = 0;
var ageOldestWomen = 0;
var idOldestMen = null;
var idOldestWomen = null;

do {
    id = parseInt(prompt('Introduce una id'));
    var edad = parseInt(prompt('Introduce la edad'));
    var sexo = prompt('Introduce el sexo');

    if (( sexo === 'male' || sexo === 'MALE') && edad >= 18 && edad <= 65) {
        youngMen++;
    }

    if (sexo === 'male' || sexo === 'MALE') {
        totalMen++;
    } else if (sexo === 'female' || sexo === 'FEMALE') {
        totalWomen++;
    }

    if (( sexo === 'male' || sexo === 'MALE') && edad >= ageOldestMen) {
        ageOldestMen = edad;
        idOldestMen = id;
    } else if ((sexo === 'female' || sexo === 'FEMALE') && edad >= ageOldestWomen) {
        ageOldestWomen = edad;
        idOldestWomen = id;
    }

    totalPeople++;
} while (id !== 0);

document.getElementById('resultado').innerHTML = '' +
    'Hay un total de ' + totalPeople + ' personas, ' +
    '' + totalMen + ' hombres, ' + totalWomen + ' mujeres. <br/><br/>' +
    'Hay ' + youngMen + ' hombres que están entre 18 y 65 años, la mujer ' +
    'con más edad tiene la ID ' + idOldestWomen + ' y el hombre con más edad tiene ' +
    'la ID ' + idOldestMen + '.';