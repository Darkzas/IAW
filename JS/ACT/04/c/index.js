var priceFirstProduct = prompt('Introduce el precio del primer producto');
var quantityFirstProduct = prompt('Introduce la cantidad del primer producto');
var priceSecondProduct = prompt('Introduce el precio del segundo producto');
var quantitySecondProduct = prompt('Introduce la cantidad del segundo producto');

var bill = parseInt(priceFirstProduct) * parseInt(quantityFirstProduct) + parseInt(priceSecondProduct) * parseInt(quantitySecondProduct);

document.writeln('La cuenta de los productos es de ' + bill + ' euros.');