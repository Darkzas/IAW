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

$sql1 = "SELECT * FROM cursos;";
$sql2 = "SELECT * FROM category;";

$rows1 = mysqli_query($con1, $sql1) or die ("Problems in query: " . mysqli_error());
$rows2 = mysqli_query($con2, $sql2) or die ("Problems in query: " . mysqli_error());

echo "<form action='19d,e - template.php' method='POST'>";
echo "Curso: <select name='curso'>";


while ($row1 = mysqli_fetch_array($rows1)) {
    echo "<option value='" . $row1['codigo'] . "'>" . $row1['nombrecurso'] . "</option>";
}

echo "</select>" .
    "<br/>";

echo "Categoría: <select name='categoria'>";


while ($row2 = mysqli_fetch_array($rows2)) {
    echo "<option value='" . $row2['CODE'] . "'>" . $row2['NAME'] . "</option>";
}

echo "</select>" .
    "<br/><br/>" .
    "<input type='submit' value='Send'>" .
    "</form>";

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>