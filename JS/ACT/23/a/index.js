function showMessage() {
    var resultado = [];

    var checkbox1 = document.getElementById('checkbox1').checked;
    var checkbox2 = document.getElementById('checkbox2').checked;
    var checkbox3 = document.getElementById('checkbox3').checked;

    if (checkbox1) {
        resultado.push('Football');
    }

    if (checkbox2) {
        resultado.push('Tennis');
    }

    if (checkbox3) {
        resultado.push('Karate');
    }

    alert(resultado.join(', '));
}