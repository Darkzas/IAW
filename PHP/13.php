<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<form action="13template.php" method="POST">
    Client's Name: <input type="text" name="client" /><br/>
    Address: <input type="text" name="address" /><br/><br/>
    Prosciutto: <input type="checkbox" name="prosciutto" value="true"/><br/>
    Quantity: <select name="prosciuttoQ">
        <option value="0" selected>0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/><br/>
    Napolitana: <input type="checkbox" name="napolitana" value="true"/><br/>
    Quantity: <select name="napolitanaQ">
        <option value="0" selected>0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/><br/>
    Mozzarella: <input type="checkbox" name="mozzarella" value="true" /><br/>
    Quantity: <select name="mozzarellaQ">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br/><br/>
    <input type="submit" value="Send" />
</form>
</body>
</html>