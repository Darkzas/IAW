<?php
require_once('32functions.php');
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
$con1 = returnConnection();

if (mysqli_connect_errno($con1)) {
    printf("Error: ", mysqli_connect_error());
}

$sql1 = 'SELECT * FROM alumnos;';
$rows = mysqli_query($con1, $sql1);

while ($result = mysqli_fetch_array($rows)) {
    echo "Nombre: " . $result["NOMBRE"] . ", E-mail: " . $result["MAIL"] . "<br/>";
}

mysqli_close($con1);
?>
</body>
</html>