<?php
    if (isset($_POST['user'])) {
        setcookie('user', $_POST['user'], time() + 60*60*24*365, "/");
        $cookieCreated = true;
    } else {
        $cookieCreated = false;
    }
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
    if (isset($_COOKIE['user']) && !$cookieCreated) {
        echo "Eres " . $_COOKIE['user'] . "<br/><br/>";
    } else if ($cookieCreated) {
        echo "La cookie ha sido creada.<br/>";
        echo "<a href='29.php'>Recargar página</a><br/><br/>";
        $cookieCreated = false;
    }
?>
<form action="29.php" method="POST">
    User: <input type="text" name="user" />
    <input type="submit" value="Send" />
</form>
</body>
</html>