<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<form action="22template.php" method="post">
    Cursos: <br/>
    <?php
    $con1 = mysqli_connect("localhost","root","cicles2018","base1");

    if (mysqli_connect_errno($con1)) {
        printf("Error: ", mysqli_connect_error());
    }

    $sql = 'SELECT * FROM cursos;';
    $rows = mysqli_query($con1, $sql);

    echo "<select name='curso'>";

    while ($row = mysqli_fetch_array($rows)) {
        echo "<option value='" . $row["codigo"] . "'>" . $row["nombrecurso"] . "</option>";
    }

    echo "</select>";
    ?>
    <br/><br/>
    Nombre alumno: <input type="text" name="nombreAlumno"  /><br/>
    Mail alumno: <input type="text" name="mailAlumno" /><br/><br/>
    Categoría: <br/>
    <?php
    $con2 = mysqli_connect("localhost","root","cicles2018","shop");

    if (mysqli_connect_errno($con2)) {
        printf("Error: ", mysqli_connect_error());
    }

    $sql = 'SELECT * FROM category;';
    $rows = mysqli_query($con2, $sql);

    echo "<select name='categoria'>";

    while ($row = mysqli_fetch_array($rows)) {
        echo "<option value='" . $row["CODE"] . "'>" . $row["NAME"] . "</option>";
    }

    echo "</select>";
    ?>
    <br/><br/>
    Nombre artículo: <input type="text" name="nombreArticulo"  /><br/>
    Descripción artículo: <input type="text" name="descArticulo" /><br/>
    Precio artículo: <input type="text" name="precioArticulo"  /><br/>
    Bargain: <input type="checkbox" name="bargainArticulo" value="true" /><br/><br/>
    <input type="submit" value="Send">
</form>
</body>
</html>