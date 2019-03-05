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
<table>
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Weight</td>
        <td>Category</td>
        <td>Champion</td>
    </tr>
    <tr>
<?php
    $name = 'Peter';
    $age = 22;
    $weight = 55.5;
    $category = 'Languila';
    $champion = true;
        echo '<td>' . $name . '</td>';
        echo '<td>' . $age . '</td>';
        echo '<td>' . $weight . '</td>';
        echo '<td>' . $category . '</td>';
        echo '<td>' . $champion . '</td>';
?>
    </tr>
</table>
</body>
</html>