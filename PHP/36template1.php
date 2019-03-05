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
$fileName = date("Y-m-d_H-i-s") . ".txt";
$f=fopen($fileName, "a") or die("File error");
fputs($f, $_POST['user']);
fputs($f, "\n");
fputs($f, $_POST['desc']);
fclose($f);
echo "Click <a href='36template2.php?fileName=" . $fileName . "'>here</a> to view the file.";
?>
</body>
</html>