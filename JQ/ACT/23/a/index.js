$(document).ready(ready);

function ready() {
    $("[href]").each(function() {
        if ($(this).attr('href').indexOf('.es') !== -1) {
            $(this).css('background-color', "#ff0");
        }
    });
}