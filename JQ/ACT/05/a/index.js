$(document).ready(ready);

function ready() {
    $("#button1").click(function() {
        changeFontSize('10px');
    });

    $("#button2").click(function() {
        changeFontSize('15px');
    });

    $("#button3").click(function() {
        changeFontSize('20px');
    });

    function changeFontSize(size) {
        $("p:odd").css('font-size', size);
    }
}