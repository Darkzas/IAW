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
$base1 = $_POST["base1"];
$shop = $_POST["shop"];

$con1 = mysqli_connect("localhost","root","cicles2018","base1");
$con2 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1) || mysqli_connect_errno($con2)) {
    printf("Error: ", mysqli_connect_error());
} else {
    echo "Conectado a las bases de datos. <br/>";
}

$sql1 = "INSERT INTO cursos (nombrecurso) VALUES ('" . $base1 . "')";
$sql2 = "INSERT INTO category (NAME) VALUES ('" . $shop . "')";

if ($base1 && mysqli_query($con1, $sql1)) {
    echo "Se insertó con éxito en la tabla cursos. <br/>";
}

if ($shop && mysqli_query($con2, $sql2)) {
    echo "Se insertó con éxito en la tabla category. <br/>";
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>