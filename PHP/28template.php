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
if (isset($_FILES["foto1"]) && $_FILES["foto1"]["error"] === 0) {
    copy($_FILES["foto1"]["tmp_name"], $_FILES["foto1"]["name"]);
    $foto1 = $_FILES["foto1"]["name"];
};

if (isset($_FILES["foto2"]) && $_FILES["foto2"]["error"] === 0) {
    copy($_FILES["foto2"]["tmp_name"], $_FILES["foto2"]["name"]);
    $foto2 = $_FILES["foto2"]["name"];
}

if (isset($_FILES["foto3"]) && $_FILES["foto3"]["error"] === 0) {
    copy($_FILES["foto3"]["tmp_name"], $_FILES["foto3"]["name"]);
    $foto3 = $_FILES["foto3"]["name"];
}

if (isset($foto1)) {
    echo "Foto 1: <br/>";
    echo "<img src='$foto1' style='width: 300px' /><br/>";
}

if (isset($foto2)) {
    echo "Foto 2: <br/>";
    echo "<img src='$foto2' style='width: 300px' /><br/>";
}

if (isset($foto3)) {
    echo "Foto 3: <br/>";
    echo "<img src='$foto3' style='width: 300px' /><br/>";
}

$con1 = mysqli_connect("localhost","root","cicles2018","shop");

if (mysqli_connect_errno($con1)) {
    printf("Error: ", mysqli_connect_error());
}

$sql1 = 'INSERT INTO article (NAME, DESCRIPTION, PRICE, CATEGORYCODE, BARGAIN) VALUES (\'' . $_POST["NAME"] . '\', \'' . $_POST["DESCRIPTION"] . '\', ' . $_POST["PRICE"] . ', ' . $_POST["CATEGORYCODE"] . ', ' . $_POST["BARGAIN"] . ');';
$rows1 = mysqli_query($con1, $sql1);

if ($rows1 == 1) {
    printf("Se ha introducido el artículo correctamente.<br/><br/>");
    $lastId = mysqli_insert_id($con1) . ".jpg";

    if (isset($_FILES["foto4"]) && $_FILES["foto4"]["error"] === 0) {
        copy($_FILES["foto4"]["tmp_name"], $lastId);
        $foto4 = $_FILES["foto4"]["name"];
        echo "<img src='$foto4' style='width: 300px' />";
    }
}

mysqli_close($con1);
?>
</body>
</html>