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
if (isset($_POST["password"]) && $_POST["password"] === "1234") {
    echo "Welcome!";
} else {
    header("Location: 33.php?error=1");
}
?>
</body>
</html>