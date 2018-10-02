function suma(a, b) {
    return parseInt(a)+parseInt(b);
}

function resta(a, b) {
    return parseInt(a)-parseInt(b);
}

function calculadora() {
    var op1 = document.getElementById('op1').value;
    var op2 = document.getElementById('op2').value;

    var resultat = suma(op1, op2);

    document.getElementById('resultat').innerHTML = resultat;
}

function reset() {
    document.getElementById('op1').value = 0;
    document.getElementById('op2').value = 0;
    document.getElementById('resultat').innerHTML = '';
}