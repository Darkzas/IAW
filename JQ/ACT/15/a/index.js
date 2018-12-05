$(document).ready(ready);

function ready() {
    $("div").dblclick(function() {
        $(this).toggleClass('resize');
    });
}