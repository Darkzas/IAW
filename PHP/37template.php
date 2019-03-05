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
if (checkdate($_POST["month"], $_POST["day"], $_POST["year"])) {
    echo "Entered date is valid.";
} else {
    echo "Entered date is not valid.";
}
?>
</body>
</html>