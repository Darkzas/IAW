var salary = parseInt(prompt('Introduce el salario'));
var years = parseInt(prompt('Introduce los años que lleva en la empresa'));
var resultado = 0;

if (salary < 500 && years >= 10) {
    resultado = salary * 1.20;
} else if (salary < 500 && years < 10) {
    resultado = salary * 1.05;
} else if (salary >= 500) {
    resultado = salary;
}

document.getElementById('resultado').innerHTML = resultado;