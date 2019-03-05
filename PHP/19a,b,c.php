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
$sql2 = "SELECT * FROM category ORDER BY NAME asc;";
$sql3 = "SELECT a.*, c.NAME as CATEGORY FROM article a LEFT JOIN category c ON a.CATEGORYCODE = c.CODE ORDER BY PRICE desc;";

$rows1 = mysqli_query($con1, $sql1) or die ("Problems in query: " . mysqli_error());
$rows2 = mysqli_query($con2, $sql2) or die ("Problems in query: " . mysqli_error());
$rows3 = mysqli_query($con2, $sql3) or die ("Problems in query: " . mysqli_error());

echo "<table>" .
    "<tr>" .
    "<td>codigo</td>" .
    "<td>nombrecurso</td>" .
    "</tr>";


while ($row1 = mysqli_fetch_array($rows1)) {
    echo "<tr><td>" . $row1['codigo'] . "</td>";
    echo "<td>" . $row1['nombrecurso'] . "</td></tr>";
}

echo "</table>" .
    "<br/>";

echo "<table>" .
    "<tr>" .
    "<td>CODE</td>" .
    "<td>NAME</td>" .
    "</tr>";


while ($row2 = mysqli_fetch_array($rows2)) {
    echo "<tr><td>" . $row2['CODE'] . "</td>" .
        "<td>" . $row2['NAME'] . "</td></tr>";
}

echo "</table>" .
    "<br/>";

echo "<table>" .
    "<tr>" .
    "<td>CODE</td>" .
    "<td>NAME</td>" .
    "<td>DESCRIPTION</td>" .
    "<td>PRICE</td>" .
    "<td>CATEGORY</td>" .
    "</tr>";


while ($row3 = mysqli_fetch_array($rows3)) {
    echo ($row3['BARGAIN'] ? "<tr style='background-color: red'>" : "<tr>");
    echo "<td>" . $row3['CODE'] . "</td>" .
        "<td>" . $row3['NAME'] . "</td>" .
        "<td>" . $row3['DESCRIPTION'] . "</td>" .
        "<td>" . $row3['PRICE'] . "</td>" .
        "<td>" . $row3['CATEGORY'] . "</td></tr>";
}

echo "</table>" .
    "<br/>";



mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>