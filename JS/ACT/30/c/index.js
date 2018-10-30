function cookieEnabled() {
    var cookieEnabled = window.navigator.cookieEnabled;
    var resultado = 'Cookies are ';

    if (cookieEnabled) {
        resultado += 'enabled';
    } else {
        resultado += 'disabled';
    }

    alert(resultado);
}