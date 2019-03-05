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
$num = rand(1, 3);
$result = 0;

if ($num == 1) {
    $result = 'ONE';
} elseif ($num == 2) {
    $result = 'TWO';
} else {
    $result = 'THREE';
}

echo $result;
?>
</body>
</html>