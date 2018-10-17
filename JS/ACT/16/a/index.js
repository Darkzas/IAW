var elements = new Array(8);
var totalSum = 0;
var avg;
var totalSumHT5 = 0;
var countHT5 = 0;

for (var i = 0; i <= 7; i++) {
    elements[i] = Math.ceil(Math.random()*10);
    alert (typeof elements[i]);
}

for (var j = 0; j < elements.length; j++) {
    var element = elements[j];
    totalSum += element;

    if (element > 5) {
        totalSumHT5 += element;
        countHT5++;
    }
}

avg = totalSum / elements.length;

document.getElementById('resultado').innerHTML = 'elements: ' + elements.toString() + '<br/>' +
    'Total sum of the 8 numbers: ' + totalSum + '<br/>' +
    'Average of the 8 numbers: ' + avg + '<br/>' +
    'Total sum of the elements higher than 5: ' + totalSumHT5 + '<br/>' +
    'How many numbers are higher than 5: ' + countHT5;