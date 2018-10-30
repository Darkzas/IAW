function go() {
    var random = Math.floor(Math.random()*3);
    var resultado;

    if (random === 0) {
        resultado = 'https://www.google.es/';
    } else if (random === 1) {
        resultado = 'https://es.yahoo.com/';
    } else if (random === 2) {
        resultado = 'https://www.bing.com/?setlang=es';
    }

    window.location = resultado;
}