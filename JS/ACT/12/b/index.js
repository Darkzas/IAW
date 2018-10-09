var sum = 0;

for (var i = 1; i <= 10; i++) {
    var number = parseInt(prompt('Introduce el número ' + i));

    if (i >= 5) {
        sum += number;
    }
}

document.getElementById('resultado').innerHTML = sum;