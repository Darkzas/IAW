function calculate() {
    var selected1 = document.getElementById('select1');
    var selected2 = document.getElementById('select2');
    var selected3 = document.getElementById('select3');

    document.getElementById('text').value = parseInt(selected1.options[selected1.selectedIndex].value) +
        parseInt(selected2.options[selected2.selectedIndex].value) +
        parseInt(selected3.options[selected3.selectedIndex].value);
}