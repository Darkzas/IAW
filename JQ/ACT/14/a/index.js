$(document).ready(ready);

function ready() {
    $("button").mousedown(function() {
        $(this).css('background-color', 'orange');
    });
    $("button").mouseup(function() {
        $(this).css('background-color', '');
    });
}