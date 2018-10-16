var Addition = new Addition();
var value1 = prompt('Introduce el primer número');
var value2 = prompt('Introduce el segundo número');

Addition.loadValue1(value1);
Addition.loadValue2(value2);

alert(Addition.result());

function Addition() {
    this.value1 = 0;
    this.value2 = 0;
    this.loadValue1 = loadValue1;
    this.loadValue2 = loadValue2;
    this.result = result;

    function loadValue1(value1) {
        this.value1 = parseInt(value1);
    }

    function loadValue2(value2) {
        this.value2 = parseInt(value2);
    }

    function result() {
        return this.value1 + this.value2;
    }
}