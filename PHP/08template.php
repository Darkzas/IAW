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
    $name = $_POST["name"];
    $radio = $_POST["radio"];
    $education = '';

    if ($radio == "1") {
        $education = 'No Studies';
    } elseif ($radio == "2") {
        $education = 'Primary School';
    } elseif ($radio == "3") {
        $education = 'Secondary School';
    } elseif ($radio == "4") {
        $education = 'University';
    }

    echo "Soy " . $name . " y mi grado de educación es: " . $education
?>
</body>
</html>