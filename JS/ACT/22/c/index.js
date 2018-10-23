function calculate() {
    var selected = document.getElementById('select1');
    var quantity = document.getElementById('quantity').value;
    document.getElementById('resultado').value = selected.options[selected.selectedIndex].value * quantity;
}