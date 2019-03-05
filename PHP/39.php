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
if (!isset($_POST["user"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["salary"])) {
    ?>
    <form action="39.php" method="POST">
        User name: <input type="text" name="user"/><br/>
        E-mail: <input type="email" name="email"/><br/>
        Salary: <input type="number" name="salary"/><br/><br/>
        <input type="submit" value="Send"/>
    </form>
    <?php
} else {
    echo "User: " . $_POST["user"] . "<br/>";
    echo "E-mail: " . $_POST["email"] . "<br/>";
    printf("Salary is %08d euros.", $_POST["salary"]);
}
?>
</body>
</html>