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

if (mysqli_connect_errno($con1)) {
    printf("Error: ", mysqli_connect_error());
}

$sql1 = 'SELECT c.nombrecurso, GROUP_CONCAT(a.NOMBRE) AS alumnos, COUNT(a.CODIGO) as count FROM cursos c JOIN alumnos a ON c.codigo = a.CODIGOCURSO GROUP BY c.codigo;';
$rows1 = mysqli_query($con1, $sql1);

echo "<b>Cursos: </b><br/>";

while ($row1 = mysqli_fetch_array($rows1)) {
    echo "Course Name: " . $row1["nombrecurso"] . ".<br/>";
    echo "Number of Students: " . $row1["count"] . ".<br/>";
    echo "Students: " . str_replace(",", ", ", $row1["alumnos"]) . ".<br/><br/>";
}

$sql2 = 'SELECT c.NAME, GROUP_CONCAT(a.NAME, " - ", a.PRICE) AS articles, COUNT(a.CODE) as count FROM category c JOIN article a ON c.CODE = a.CATEGORYCODE GROUP BY c.CODE;';
$rows2 = mysqli_query($con2, $sql2);

echo "<b>Categorías: </b><br/>";

while ($row2 = mysqli_fetch_array($rows2)) {
    echo "Category: " . $row2["NAME"] . ".<br/>";
    echo "Number of Articles: " . $row2["count"] . ".<br/>";
    echo "Articles: " . str_replace(",", " / ",$row2["articles"]) . ".<br/><br/>";
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>