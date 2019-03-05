<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<form action="21template.php" method="post">
    Cursos: <br/><br/>
    <?php
    $con1 = mysqli_connect("localhost","root","cicles2018","base1");

    if (mysqli_connect_errno($con1)) {
        printf("Error: ", mysqli_connect_error());
    }

    $sql = 'SELECT * FROM cursos;';
    $rows = mysqli_query($con1, $sql);

    while ($row = mysqli_fetch_array($rows)) {
        echo $row['nombrecurso'] . ": <input type='text' name='" . $row['codigo'] . "' placeholder='New value...' /> <br/>";
    }
    ?>
    <br/>
    Add 2014 suffix: <input type="checkbox" name="modifyCursos" value="true" /><br/>
    Update price: <input type="checkbox" name="updatePrice" value="true" /><br/>
    Discount price: <input type="checkbox" name="discountPrice" value="true" /><br/><br/>
    <input type="submit" value="Send">
</form>
</body>
</html>