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

$sql1 = 'SELECT COUNT(1) as count FROM cursos;';
$sql2 = 'SELECT nombrecurso FROM cursos;';
$row1 = mysqli_fetch_array(mysqli_query($con1, $sql1));
$rows2 = mysqli_query($con1, $sql2);

echo "<b>Cursos (" . $row1["count"] . "): </b><br/>";

while ($row2 = mysqli_fetch_array($rows2)) {
    echo $row2["nombrecurso"] . "<br/>";
}

echo "<br/>";

$sql3 = 'SELECT COUNT(1) as count FROM alumnos;';
$sql4 = 'SELECT NOMBRE FROM alumnos;';
$row3 = mysqli_fetch_array(mysqli_query($con1, $sql3));
$rows4 = mysqli_query($con1, $sql4);

echo "<b>Alumnos (" . $row3["count"] . "): </b><br/>";

while ($row4 = mysqli_fetch_array($rows4)) {
    echo $row4["NOMBRE"] . "<br/>";
}

mysqli_close($con1);
?>
</body>
</html>