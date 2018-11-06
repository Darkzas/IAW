$(document).ready(ready);

function ready() {
    $("#button1").click(function() {
        showContent('head');
    });

    $("#button2").click(function() {
        showContent('body');
    });

    function showContent(element) {
        alert($(element).html());
    }
}