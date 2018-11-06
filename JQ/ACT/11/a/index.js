$(document).ready(ready);

function ready() {
    $("td").mouseover(function() {
        toggle(this, 'bgColorBlue');
    });

    $("td").mouseout(function() {
        toggle(this, 'bgColorBlue');
    });

    function toggle(element, clase) {
        $(element).toggleClass(clase);
    }
}