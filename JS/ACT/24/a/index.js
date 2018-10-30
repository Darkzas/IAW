function showMessage() {
    var resultado;

    var radio1 = document.getElementById('radio1').checked;
    var radio2 = document.getElementById('radio2').checked;

    if (! (radio1 && radio2)) {
        if (radio1) {
            resultado = 'You can enter';
        } else {
            resultado = 'You can\'t enter';
        }
    } else {
        resultado = 'Selecciona únicamente una opción!';
    }

    alert(resultado);
}