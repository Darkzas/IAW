$(document).ready(ready);

function ready() {
    $("#button1").click(function() {
        toggle('thead', 'bgColorBlue');
    });

    $("#button2").click(function() {
        toggle('tbody', 'bgColorOrange');
    });

    function toggle(element, clase) {
        $(element).toggleClass(clase);
    }
}