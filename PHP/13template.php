<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<?php
$text = [];

if (isset($_POST["prosciutto"])) {
    $prosciutto = 5.50 * $_POST["prosciuttoQ"];
    array_push($text, "Prosciutto: " . $prosciutto);
}

if (isset($_POST["napolitana"])) {
    $napolitana = 6.75 * $_POST["napolitanaQ"];
    array_push($text, "Napolitana: " . $napolitana);
}

if (isset($_POST["mozzarella"])) {
    $mozzarella = 4.75 * $_POST["mozzarellaQ"];
    array_push($text, "Mozzarella: " . $mozzarella);
}

$f=fopen("pizza.txt", "a") or die("File error");
fputs($f, $_POST['client']);
fputs($f, "\n");
fputs($f, $_POST['address']);
fputs($f, "\n");
fputs($f, "\n");
fputs($f, implode(', ', $text));
fputs($f, "\n");
fputs($f, "----------------------------------------------");
fputs($f, "\n");
fclose($f);
echo "You have been written correctly.";
?>
</body>
</html>