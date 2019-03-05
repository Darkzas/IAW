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
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $salary = isset($_POST["salary"]) ? $_POST["salary"] : null;
    $taxes = false;

    if ($salary == "+3000") {
        $taxes = true;
    }

    echo "Soy " . $name . " y gano " . ($salary != "+3000" ? "entre " : "") . $salary . " euros cada mes" . ($taxes ? " y debo pagar tasas." : ".");
?>
</body>
</html>