var equilateral = 0;
var isosceles = 0;
var scalene = 0;
var moreTriangles = null;

for (var i = 1; i <= 4; i++) {
    var side1 = parseInt(prompt('Introduce el lado 1 del triángulo ' + i));
    var side2 = parseInt(prompt('Introduce el lado 2 del triángulo ' + i));
    var side3 = parseInt(prompt('Introduce el lado 3 del triángulo ' + i));

    if (side1 === side2 && side2 === side3) {
        equilateral++;
    } else if (side1 === side2 || side2 === side3 || side1 === side3) {
        isosceles++;
    } else if (side1 !== side2 && side2 !== side3 && side1 !== side3) {
        scalene++;
    }
}

if (equilateral > isosceles && equilateral > scalene) {
    moreTriangles = 'equilateral';
} else if (isosceles > equilateral && isosceles > scalene) {
    moreTriangles = 'isosceles';
} else if (scalene > equilateral && scalene > isosceles) {
    moreTriangles = 'scalene';
}

document.getElementById('resultado').innerHTML = 'There are ' + equilateral + ' equilateral, ' +
    isosceles + ' isosceles and ' + scalene + ' scalene.<br/><br/>' +
    'There are more ' + moreTriangles;