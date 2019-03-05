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
if (isset($_GET["error"]) && $_GET["error"] == 1) {
    echo "Wrong password<br/><br/>";
}
?>
<form action="33template.php" method="POST">
    Password: <input type="password" name="password" /><br/><br/>
    <input type="submit" value="Send" />
</form>
</body>
</html>