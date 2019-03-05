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
if (isset($_GET['pos1'])) {
    $pos1 = $_GET['pos1'];
} else {
    $pos1 = 0;
}

if (isset($_GET['pos2'])) {
    $pos2 = $_GET['pos2'];
} else {
    $pos2 = 0;
}

$con1 = mysqli_connect("localhost","root","cicles2018","base1");
$con2 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1)) {
    printf("Error: ", mysqli_connect_error());
}

$sql1 = 'SELECT * FROM cursos LIMIT ' . $pos1 . ', 3;';
$rows1 = mysqli_query($con1, $sql1);

echo "<b>Cursos: </b><br/>";

$next1 = 0;

while ($row1 = mysqli_fetch_array($rows1)) {
    $next1++;
    echo $row1["nombrecurso"] . "<br/>";
}

echo "<br/>";

if ($pos1 == 0) {
    echo "Previous";
} else {
    echo "<a href='27.php?pos1=" . ($pos1 - 3) . "&pos2=" . $pos2 . "'>Previous</a>";
}

echo " - ";

if ($next1 == 3) {
    echo "<a href='27.php?pos1=" . ($pos1 + 3) . "&pos2=" . $pos2 . "'>Next</a>";
} else {
    echo "Next";
}

echo "<br/><br/>";

$sql2 = 'SELECT * FROM article LIMIT ' . $pos2 . ', 5;';
$rows2 = mysqli_query($con2, $sql2);

echo "<b>Artículos: </b><br/>";

$next2 = 0;

while ($row2 = mysqli_fetch_array($rows2)) {
    $next2++;
    echo $row2["NAME"] . "<br/>";
}

if ($pos2 == 0) {
    echo "Previous";
} else {
    echo "<a href='27.php?pos1=" . $pos1 . "&pos2=" . ($pos2 - 5) . "'>Previous</a>";
}

echo " - ";

if ($next2 == 5) {
    echo "<a href='27.php?pos1=" . $pos1 . "&pos2=" . ($pos2 + 5) . "'>Next</a>";
} else {
    echo "Next";
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>