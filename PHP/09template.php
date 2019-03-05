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
    $check1 = isset($_POST["check1"]) ? $_POST["check1"] : null;
    $check2 = isset($_POST["check2"]) ? $_POST["check2"] : null;
    $check3 = isset($_POST["check3"]) ? $_POST["check3"] : null;
    $check4 = isset($_POST["check4"]) ? $_POST["check4"] : null;
    $deportes = array();
    $contador = 0;

    if ($check1 == "football") {
        array_push($deportes, $check1);
        $contador++;
    }

    if ($check2 == "tennis") {
        array_push($deportes, $check2);
        $contador++;
    }

    if ($check3 == "basketball") {
        array_push($deportes, $check3);
        $contador++;
    }

    if ($check4 == "golf") {
        array_push($deportes, $check4);
        $contador++;
    }

    $deportes = implode(", ", $deportes);

    echo "Soy " . $name . " y practico " . $contador . " deportes, que son: " . $deportes;
?>
</body>
</html>