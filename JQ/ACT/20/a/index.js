$(document).ready(ready);

function ready() {
    $("div[id!='hide']").click(function() {
        $(this).fadeOut("slow", function() {
            $("div#hide").fadeIn("slow");
        });
    });
}