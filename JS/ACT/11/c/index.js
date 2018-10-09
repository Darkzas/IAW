var accountNumber = null;
var totalMoney = 0;

do {
    accountNumber = parseInt(prompt('Introduce tu cuenta bancaria'));
    var name = prompt('Introduce tu nombre');
    var money = parseInt(prompt('Introduce tu dinero'));

    totalMoney += money;

    document.getElementById('resultado').innerHTML += name + ' is the owner of ' +
    '' + accountNumber + ' account with ' + money + ' euros. <br/>';
} while (accountNumber !== 1);

document.getElementById('resultado').innerHTML += 'Hay un total de ' + totalMoney + ' ' +
    'euros en todo el banco.';