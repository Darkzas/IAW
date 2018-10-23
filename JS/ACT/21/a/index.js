function showMessage() {
    var resultado = 'Las contraseñas ';

    if (document.getElementById('password1').value === document.getElementById('password2').value) {
        resultado += 'son iguales';
    } else {
        resultado += 'no son iguales';
    }

    alert(resultado);
}