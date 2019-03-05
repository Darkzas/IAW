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
$con1 = mysqli_connect("localhost","root","cicles2018","base1");

if (mysqli_connect_errno($con1)) {
    printf("Error: ", mysqli_connect_error());
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

$sql1 = 'SELECT CODIGO, NOMBRE FROM alumnos WHERE MAIL = \'' . $email . '\';';
$rows = mysqli_query($con1, $sql1);
$result = mysqli_fetch_array($rows);

if ($result != null) {
    $_SESSION['name'] = $result['NOMBRE'];
    echo "Sesión creada con valor: " . $result['NOMBRE'] . "<br/><br/>";
    echo "<a href='31template2.php'>Check session</a>";
} else {
    echo 'This email doesn\'t exist';
}

mysqli_close($con1);
?>
</body>
</html>