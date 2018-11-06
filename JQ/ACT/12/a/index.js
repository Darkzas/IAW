$(document).ready(ready);

function ready() {
    $("td").hover(toggle, toggle);

    function toggle() {
        $(this).toggleClass('bgColorBlue');
    }
}