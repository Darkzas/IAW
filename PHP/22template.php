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
$con2 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1) || mysqli_connect_errno($con2)) {
    printf("Error: ", mysqli_connect_error());
}

if (isset($_POST["curso"])) {
    $curso = $_POST["curso"];
    $nombreAlumno = isset($_POST["nombreAlumno"]) ? $_POST["nombreAlumno"] : "";

    if ($nombreAlumno !== "") {
        $mailAlumno = isset($_POST["mailAlumno"]) ? $_POST["mailAlumno"] : "";

        $sql = "INSERT INTO alumnos (NOMBRE, MAIL, CODIGOCURSO) VALUES ('" . $nombreAlumno . "', '" . $mailAlumno . "', " . $curso . ")";
        mysqli_query($con1, $sql);
        echo "Alumno " . $nombreAlumno . " añadido. <br/>";
    }
}

if (isset($_POST["categoria"])) {
    $categoria = $_POST["categoria"];
    $nombreArticulo = isset($_POST["nombreArticulo"]) ? $_POST["nombreArticulo"] : "";

    if ($nombreArticulo !== "") {
        $descArticulo = isset($_POST["descArticulo"]) ? $_POST["descArticulo"] : "";
        $precioArticulo = isset($_POST["precioArticulo"]) ? $_POST["precioArticulo"] : 0.00;
        $bargainArticulo = isset($_POST["bargainArticulo"]) && $_POST["bargainArticulo"] === "true" ? 1 : 0;

        $sql = "INSERT INTO article (NAME, DESCRIPTION, PRICE, CATEGORYCODE, BARGAIN) VALUES ('" . $nombreArticulo . "', '" . $descArticulo . "', " . $precioArticulo . ", " . $categoria . ", " . $bargainArticulo . ")";
        mysqli_query($con2, $sql);
        echo "Artículo " . $nombreArticulo . " añadido. <br/>";
    }
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>