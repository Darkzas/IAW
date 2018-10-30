function showMessage() {
    var resultado;

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (password.length < 7) {
        resultado = 'Password is shorter than 7 characters';
    } else if (password.length > 20) {
        resultado = 'Password is longer than 20 characters';
    } else {
        resultado = 'Username: ' + username + '\n' +
            'Password: ' + password;
    }

    alert(resultado);
}

function clean() {
    document.getElementById('password').value = '';
}