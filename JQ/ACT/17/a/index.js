$(document).ready(ready);

function ready() {
    $("input").blur(function() {
        if (!$(this).val()) {
            alert("Field can't be empty");
        }
    });
}