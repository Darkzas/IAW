<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
$multiplicador = 2;

echo "WHILE<br/>";

$contador = 0;

while ($contador <= 10) {
    echo $multiplicador . "X" . $contador . " = " . $multiplicador * $contador . '<br/>';
    $contador++;
}

echo "<br/><br/>FOR<br/>";

for ($i = 0; $i <= 10; $i++) {
    echo $multiplicador . "X" . $i . " = " . $multiplicador * $i . '<br/>';
}

echo "<br/><br/>DO-WHILE<br/>";

$contador = 0;

do {
    echo $multiplicador . "X" . $contador . " = " . $multiplicador * $contador . '<br/>';
    $contador++;
} while ($contador <= 10);
?>
</body>
</html>