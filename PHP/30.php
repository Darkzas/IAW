<?php
$cookieCreated = false;
$cookieDestroyed = false;

if (isset($_POST['category'])) {
    if ($_POST['category'] !== 'all') {
        setcookie('category', $_POST['category'], time() + (60*60*24*365), '/');
        $cookieCreated = true;
    } else if ($_POST['category'] === 'all') {
        setcookie('category', '', time() - 1000, '/');
        $cookieDestroyed = true;
    }
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
if ($cookieCreated) {
    echo "La cookie ha sido creada.<br/>";
    echo "<a href='30.php'>Recargar página</a><br/><br/>";
    $cookieCreated = false;
} else if ($cookieDestroyed) {
    echo "La cookie ha sido destruida.<br/>";
    echo "<a href='30.php?category=all'>Recargar página</a><br/><br/>";
    $cookieDestroyed = false;
} else if (isset($_COOKIE['category']) && $_COOKIE['category'] === 'politics') {
    echo "Me gusta la política. <br/><br/>";
} else if (isset($_COOKIE['category']) && $_COOKIE['category'] === 'economy') {
    echo "Me gusta la economía. <br/><br/>";
} else if (isset($_COOKIE['category']) && $_COOKIE['category'] === 'sports') {
    echo "Me gustan los deportes. <br/><br/>";
} else if (!isset($_COOKIE['category']) && isset($_GET['category']) && $_GET['category'] === 'all') {
    echo "Me gusta todo. <br/><br/>";
}
?>
<form action="30.php" method="POST">
    Política: <input type="radio" name="category" value="politics" /><br/>
    Economía: <input type="radio" name="category" value="economy" /><br/>
    Deportes: <input type="radio" name="category" value="sports" /><br/>
    Todo: <input type="radio" name="category" value="all" /><br/><br/>
    <input type="submit" value="Send" />
</form>
</body>
</html>