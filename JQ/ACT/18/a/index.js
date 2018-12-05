$(document).ready(ready);

function ready() {
    $("#add").click(add);

    function add() {
        $('div#parent').append('' +
            '<div>' +
            '<input type="text" />' +
            '<button onclick="erase(this)">Eliminar</button>' +
            '</div>' +
            '<br/>');
    }
}

function erase(element) {
    $(element).parent().prev().remove(); //Eliminamos el <br/>
    $(element).parent().remove(); //Eliminamos el div padre y todo su contenido del input que corresponde
}