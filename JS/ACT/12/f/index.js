var positive = 0;
var negative = 0;
var odd = 0;
var pairSum = 0;

for (var i = 1; i <= 10; i++) {
    var number = parseInt(prompt('Introduce el número ' + i));

    if (number > 0) {
        positive++;
    } else if (number < 0) {
        negative++;
    }

    if (number % 2 === 0) {
        pairSum += number;
    } else {
        odd++;
    }
}

document.getElementById('resultado').innerHTML = positive + ' positives<br/>' +
    negative + ' negatives<br/>' +
    odd + ' oddes<br/>' +
    pairSum + ' sum of pair numbers.';