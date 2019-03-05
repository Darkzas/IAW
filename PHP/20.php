<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<form action="20template.php" method="post">
Nombre curso: <input type="text" name="curso" /> <br>
Escriu DELETE per eliminar totes ses files de CURSOS: <input type="text" name="cursoDelete" /> <br>
Categorías: <br/>
    <?php
    $con1 = mysqli_connect("localhost","root","cicles2018","shop");

    if (mysqli_connect_errno($con1)) {
        printf("Error: ", mysqli_connect_error());
    }

    $sql = 'SELECT * FROM category;';
    $rows = mysqli_query($con1, $sql);

    while ($row = mysqli_fetch_array($rows)) {
        echo "<input type='checkbox' name='" . $row['CODE'] . "' value='" . $row['NAME'] . "' /> " . $row['NAME'] . " <br/>";
    }
    ?>
<input type="submit" value="Send">
</form>
</body>
</html>