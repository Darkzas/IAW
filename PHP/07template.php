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
    $name = $_POST['name'];
    $age = $_POST['age'];
    $result = '';

    if ($age >= 18) {
        $result = 'Soy adulto y me llamo ' . $name;
    } else {
        $result = 'No soy adulto y me llamo ' . $name;
    }

    echo $result;
?>
</form>
</body>
</html>