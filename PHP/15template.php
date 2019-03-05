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
$users = array("perico" => "1234", "ruben" => "2345", "krokens" => "3456", "alex" => "4567", "darksan" => "5678");
$loginAccepted = false;
$name = $_POST["name"];
$password = $_POST["password"];

foreach ($users as $key => $value) {
    if ($key == $name && $value == $password) {
        $loginAccepted = true;
        break;
    }
}

if ($loginAccepted) {
    echo "Login accepted";
} else {
    echo "Login failure";
}
?>
</body>
</html>