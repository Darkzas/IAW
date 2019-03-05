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

$curso = isset($_POST["CODIGOCURSO"]) ? $_POST["CODIGOCURSO"] : null;
$nombreAlumno = isset($_POST["NOMBRE"]) ? $_POST["NOMBRE"] : null;
$mailAlumno = isset($_POST["MAIL"]) ? $_POST["MAIL"] : "";
$birthDate = null;

if (checkdate($_POST["month"], $_POST["day"], $_POST["year"])) {
    $birthDate = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
}

$sql = "INSERT INTO alumnos (NOMBRE, MAIL, BIRTH_DATE, CODIGOCURSO) VALUES ('" . $nombreAlumno . "', '" . $mailAlumno . "', '" . $birthDate . "', " . $curso . ")";
mysqli_query($con1, $sql) or die (mysqli_error($con1));
echo "Alumno " . $nombreAlumno . " añadido.";

mysqli_close($con1);
?>
</body>
</html>