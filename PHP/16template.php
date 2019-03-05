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
$name = $_POST["name"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

if (passwordEqual($password, $password2)) {
    echo "La contraseña es igual";
} else {
    echo  "La contraseña no es igual";
}

function passwordEqual($password, $password2) {
    $result = false;

    if ($password == $password2) {
        $result = true;
    }

    return $result;
}
?>
</body>
</html>