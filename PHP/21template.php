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

foreach ($_POST as $index => $value) {
    if ($index !== "modifyCursos" &&
        $index !== "updatePrice" &&
        $index !== "discountPrice" && trim($value) !== '')
    {
        $sql = "UPDATE cursos SET nombrecurso = '" . $value . "' WHERE codigo = " . $index . ";";
        mysqli_query($con1, $sql);
        echo "Curso con ID " . $index . " modificado a " . $value . "<br/>";
    }
}

if (isset($_POST["modifyCursos"]) && $_POST["modifyCursos"] === "true") {
    $sql = "UPDATE cursos SET nombrecurso = CONCAT(nombrecurso, ' - 2014');";
    mysqli_query($con1, $sql);
    echo "All courses updated adding suffix 2014 at the end. <br/>";
}

if (isset($_POST["updatePrice"]) && $_POST["updatePrice"] === "true") {
    $sql = "UPDATE article SET PRICE = PRICE * 1.10;";
    mysqli_query($con2, $sql);
    echo "All articles prices updated in a +10%. <br/>";
}

if (isset($_POST["discountPrice"]) && $_POST["discountPrice"] === "true") {
    $sql = "UPDATE article SET PRICE = PRICE * 0.50 WHERE BARGAIN = 1;";
    mysqli_query($con2, $sql);
    echo "All articles prices with bargain have been updated to -50%. <br/>";
}

mysqli_close($con1);
mysqli_close($con2);
?>
</body>
</html>