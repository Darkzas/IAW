<?php
session_start();
?>
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
if (isset($_SESSION['name'])) {
    echo "Welcome " . $_SESSION['name'];
} else {
    echo "You can't view this page";
}
?>
</body>
</html>