<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
    <h1>Local Scope PHP</h1>
    <?php
        $x = 5;

        function test($x) {
            echo $x;
        }

        test($x);
    ?>
</body>
</html>