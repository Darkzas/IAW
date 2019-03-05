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
$curso = $_POST["curso"];
$cursoDelete = $_POST["cursoDelete"];

$con1 = mysqli_connect("localhost","root","cicles2018","base1");
$con2 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1) || mysqli_connect_errno($con2)) {
    printf("Error: ", mysqli_connect_error());
}

$sql1 = "DELETE FROM cursos WHERE nombrecurso = '" . $curso . "';";
$sql2 = "DELETE FROM cursos WHERE codigo != -1";

if ($curso) {
    if (mysqli_query($con1, $sql1)) {
        echo "Se eliminó " . $curso . " con éxito de la tabla cursos. <br/>";
    } else {
        echo "this course doesn't exist! <br/>";
    }
}

if ($cursoDelete && $cursoDelete === 'DELETE') {
    if (mysqli_query($con1, $sql2)) {
        echo "Se eliminó con éxito la tabla cursos. <br/>";
    } else {
        echo "No hay nada más que eliminar. <br/>";
    }
}

foreach ($_POST as $item => $value) {
    if ($item != "curso" && $item != "cursoDelete") {
        $sql3 = "DELETE FROM article WHERE CATEGORYCODE = " . $item;
        $sql4 = "DELETE FROM category WHERE CODE = " . $item;

        if (mysqli_query($con2, $sql3)) {
            echo "Se han eliminado los artículos de la categoría " . $value . " con éxito. <br/>";
        }

        echo mysqli_query($con2, $sql4);
        echo "Se ha eliminado la categoría " . $value . " <br/>";
    }
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>