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
$f=fopen("pizza.txt", "r") or die("File Error");

while (!feof($f)) {
    $line = fgets($f);
    $line2 = nl2br($line);

    echo $line2;
}

fclose($f);
?>
</body>
</html>