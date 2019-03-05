<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
$con1 = mysqli_connect("localhost","root","cicles2018","base1");
$con2 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1) || mysqli_connect_errno($con2)) {
    printf("Error: ", mysqli_connect_error());
} else {
    echo "Conectado a las bases de datos. <br/><br/>";
}

$sql1 = "SELECT a.* FROM alumnos a LEFT JOIN cursos c ON a.CODIGOCURSO = c.codigo WHERE a.CODIGOCURSO = " . $_POST['curso'] . ";";
$sql2 = "SELECT a.* FROM article a LEFT JOIN category c ON a.CATEGORYCODE = c.CODE WHERE a.CATEGORYCODE = " . $_POST['categoria'] . ";";

$rows1 = mysqli_query($con1, $sql1) or die ("Problems in query: " . mysqli_error());
$rows2 = mysqli_query($con2, $sql2) or die ("Problems in query: " . mysqli_error());

echo "Alumnos: ";
echo "<table>" .
    "<tr>" .
    "<td>CODIGO</td>" .
    "<td>NOMBRE</td>" .
    "<td>MAIL</td>" .
    "</tr>";


while ($row1 = mysqli_fetch_array($rows1)) {
    echo "<tr><td>" . $row1['CODIGO'] . "</td>";
    echo "<td>" . $row1['NOMBRE'] . "</td>";
    echo "<td>" . $row1['MAIL'] . "</td></tr>";
}

echo "</table>" .
    "<br/>";

echo "Artículos: ";
echo "<table>" .
    "<tr>" .
    "<td>CODE</td>" .
    "<td>NAME</td>" .
    "<td>DESCRIPTION</td>" .
    "<td>PRICE</td>" .
    "<td>BARGAIN</td>" .
    "</tr>";


while ($row2 = mysqli_fetch_array($rows2)) {
    echo "<tr><td>" . $row2['CODE'] . "</td>" .
        "<td>" . $row2['NAME'] . "</td>" .
        "<td>" . $row2['DESCRIPTION'] . "</td>" .
        "<td>" . $row2['PRICE'] . "</td>" .
        "<td>" . $row2['BARGAIN'] . "</td></tr>";
}

echo "</table>";

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>