var side = parseInt(prompt('Introduce el lado del cuadrado'));

document.getElementById('resultado').innerHTML = "El perímetro es de " + perimeter(side);

function perimeter(side) {

    return side * 4;
}