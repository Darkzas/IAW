var contador = 1;
var workers = 5;
var totalSalaries = 0;
var salaryType1 = 0;
var salaryType2 = 0;

while (contador <= workers) {
    var salary = parseInt(prompt('Introduce el salario del trabajador ' + contador));

    if (salary >= 0) {
        if (salary >= 500 && salary <= 1000) {
            salaryType1++;
        } else if (salary > 1000) {
            salaryType2++;
        }

        totalSalaries += salary;
        contador++;
    } else {
        alert('Salario erróneo, vuelve a introducirlo');
    }
}

document.getElementById('resultado').innerHTML = 'Hay ' + salaryType1 + ' trabajadores con el sueldo entre 500 y 1000 euros, ' + salaryType2 + ' con el sueldo mayor de 1000 euros y un total de salario de ' + totalSalaries + ' euros.';