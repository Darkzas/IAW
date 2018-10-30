$(document).ready(ready);

function ready() {
    $("#table1 tr").click(function() {
        $(this).css('background-color', 'orange');
    });

    $("#table2 tr").click(function() {
       $(this).css('font-size', '2em');
    });
}