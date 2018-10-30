$(document).ready(ready);

function ready() {
    $("#button1").click(function() {
        changeHref('https://www.google.es/', 'Google');
    });

    $("#button2").click(function() {
        changeHref('https://www.amazon.es/', 'Amazon');
    });

    $("#button3").click(function() {
        changeHref('https://www.forocoches.com/', 'Forocoches');
    });

    function changeHref(href, name) {
        $("a").text(name);
        $("a").attr('href', href);
    }
}