var word = prompt('Introduce una palabra');
var firstHalfPart = word.substring(0, Math.ceil(word.length / 2));
var lastChar = word.charAt(word.length - 1);
var reverse = word.split('').reverse().join('');
var whiteSpace = word.split('').join(' ');
var vowels = 0;

for (var i = 0; i < word.length; i++) {
    var letter = word.charAt(i);

    if (letter === 'a' ||
        letter === 'e' ||
        letter === 'i' ||
        letter === 'o' ||
        letter === 'u') {
        vowels++;
    }
}


document.getElementById('resultado').innerHTML = 'Half part: ' + firstHalfPart + '<br/>' +
    'Last char: ' + lastChar + '<br/>' +
    'Reverse: ' + reverse + '<br/>' +
    'White space: ' + whiteSpace + '<br/>' +
    'Vowels: ' + vowels;