<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
Alumno: <br/>
<?php
$con1 = mysqli_connect("localhost","root","cicles2018","base1");
$con2 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1) || mysqli_connect_errno($con2)) {
    printf("Error: ", mysqli_connect_error());
}

if (isset($_POST["codigoAlumno"])) {
    $codigo = $_POST["codigoAlumno"];

    if ($codigo !== "") {
        $sql = "SELECT a.NOMBRE,a.MAIL,c.nombrecurso FROM alumnos a JOIN cursos c ON a.CODIGOCURSO = c.codigo WHERE a.CODIGO = " . $codigo . ";";
        $row = mysqli_fetch_array(mysqli_query($con1, $sql));

        if ($row != null) {
            echo $row["NOMBRE"] . ", " . $row["MAIL"] . ", " . $row["nombrecurso"];
        } else {
            echo "El alumno no existe!";
        }
    } else {
        echo "El código está en blanco!";
    }
}

echo "<br/><br/>";
echo "Artículos: <br/>";

if (isset($_POST["categoria"])) {
    $categoria = $_POST["categoria"];

    if ($categoria !== "") {
        $sql = "SELECT a.*, c.NAME as category FROM article a JOIN category c ON a.CATEGORYCODE = c.CODE WHERE c.code = " . $categoria . ";";
        $rows = mysqli_query($con2, $sql);

        while ($row = mysqli_fetch_array($rows)) {
            echo $row["NAME"] . ", " . $row["DESCRIPTION"] . ", " . $row["PRICE"] . ", " . $row["category"] . "<br/>";
        }
    }
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>