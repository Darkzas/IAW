$(document).ready(ready);

function ready() {
    $("tr").click(function() {
        var id = this.id;
        var color;

        if (id === 'firstRow') {
            color = 'blue';
        } else if (id === 'secondRow') {
            color = 'orange';
        }

       $(this).css('background-color', color);
    });
}