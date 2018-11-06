$(document).ready(ready);

function ready() {
    $("div").mousemove(function(event) {
        $("p").html("Coordenada X: " + event.clientX + "<br/>" +
            "Coordenada Y: " + event.clientY);
    });
    $("div").mouseout(function() {
        $("p").text('Mouse out of the DIV');
    });
}