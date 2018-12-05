$(document).ready(ready);

function ready() {
    $("div").click(function() {
        $(this).fadeTo("normal", 0.20);
    });

    $("div").dblclick(function() {
       $(this).fadeTo("normal", 1);
    });
}