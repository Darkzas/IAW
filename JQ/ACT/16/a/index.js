$(document).ready(ready);

function ready() {
    $("input").focus(function() {
        setColor(this, 'red');
    });

    $("input").blur(function() {
        setColor(this, 'blue');
    });

    function setColor(e, color) {
        $(e).css('color', color)
    }
}