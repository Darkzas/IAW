var firstMark = parseInt(prompt('Introduce la primera nota'));
var secondMark = parseInt(prompt('Introduce la segunda nota'));
var thirdMark = parseInt(prompt('Introduce la tercera nota'));

var marksAverage = (firstMark + secondMark + thirdMark) / 3;

if (marksAverage >= 5) {
    alert('You pass!');
} else {
    alert('You fail!');
}