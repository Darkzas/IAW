changeText();

function changeText() {
    var selected = document.getElementById('select1');
    document.getElementById('text').value = selected.options[selected.selectedIndex].value;
}