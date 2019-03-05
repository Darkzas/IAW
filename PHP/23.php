<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<form action="23template.php" method="post">
    CODIGO Alumno: <input type="text" name="codigoAlumno" /><br/><br/>
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
    <input type="submit" value="Send">
</form>
</body>
</html>