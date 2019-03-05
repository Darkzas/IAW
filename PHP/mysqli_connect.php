<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Connect Data Base (PHP)</h1>
<?php
    $con = mysqli_connect("localhost","root","cicles2018","paco");

    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        echo "<p>OK: Connected to the Database.</p>";
    }

    $sql = "CREATE DATABASE prova2019";

    if (mysqli_query($con, $sql)) {
        echo "Database created";
    } else {
        echo "Error";
    }

    mysqli_close($con);
?>
</body>
</html>