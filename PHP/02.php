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
$num = rand(0, 10);

echo $num . '<br/>';

if ($num >= 5) {
       echo "You passed the exam";
} else {
       echo "You failed the exam!";
}
?>
</body>
</html>