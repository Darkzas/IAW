var classeASum = 0;
var classeBSum = 0;
var classeCSum = 0;
var classeAavg;
var classeBavg;
var classeCavg;
var classeAlength = 5;
var classeBlength = 6;
var classeClength = 11;
var classMostAvg = null;

for (var classeA = 1; classeA <= classeAlength; classeA++) {
    var nota = parseInt(prompt('Introduce la nota del alumno ' + classeA + ' (classe A)'));

    if (nota >= 0 && nota <= 10) {
        classeASum += nota;
    }
}

for (var classeB = 1; classeB <= classeBlength; classeB++) {
    var nota = parseInt(prompt('Introduce la nota del alumno ' + classeB + ' (classe B)'));

    if (nota >= 0 && nota <= 10) {
        classeBSum += nota;
    }
}

for (var classeC = 1; classeC <= classeClength; classeC++) {
    var nota = parseInt(prompt('Introduce la nota del alumno ' + classeC + ' (classe C)'));

    if (nota >= 0 && nota <= 10) {
        classeCSum += nota;
    }
}

classeAavg = classeASum / classeAlength;
classeBavg = classeBSum / classeBlength;
classeCavg = classeCSum / classeClength;

if (classeAavg >= classeBavg && classeAavg >= classeCavg) {
    classMostAvg = 'classe A';
} else if (classeBavg >= classeAavg && classeBavg >= classeCavg) {
    classMostAvg = 'classe B';
} else if (classeCavg >= classeAavg && classeCavg >= classeBavg) {
    classMostAvg = 'classe C';
}

document.getElementById('resultado').innerHTML = '' +
    'Class A avg: ' + classeAavg + '<br/>' +
    'Class B avg: ' + classeBavg + '<br/>' +
    'Class C avg: ' + classeCavg + '<br/><br/>' +
    'Most avg: ' + classMostAvg;