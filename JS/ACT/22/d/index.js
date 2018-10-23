function calculate() {
    var selected1 = document.getElementById('select1');
    var selected2 = document.getElementById('select2');
    var selected3 = document.getElementById('select3');
    var selected4 = document.getElementById('select4');
    var resultado = 0;

    if (selected1.options[selected1.selectedIndex].value === 'Kroketens') {
        resultado += 2.5;
    }

    if (selected2.options[selected2.selectedIndex].value === 'Toyota') {
        resultado += 2.5;
    }

    if (selected3.options[selected3.selectedIndex].value === 'Krokurva') {
        resultado += 2.5;
    }

    if (selected4.options[selected4.selectedIndex].value === 'Nissan Primera') {
        resultado += 2.5;
    }

    alert(resultado);
}