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
if (isset($_GET["fileName"])) {
    $f = fopen($_GET["fileName"], "r") or die("File Error");

    while (!feof($f)) {
        $line = fgets($f);
        $line2 = nl2br($line);

        echo $line2;
    }

    fclose($f);
} else {
    echo "You must pass a file name by parameters";
}
?>
</body>
</html>