$(document).ready(ready);

function ready() {
    $("button").click(function() {
        var br = $(this).prev();
        var img = br.prev();
        br.toggle();
        img.toggle();
    });
}