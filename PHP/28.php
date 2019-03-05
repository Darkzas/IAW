<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<form action="28template.php" method="POST" enctype="multipart/form-data">
    <b>Three images: </b><br/>
    <input type="file" name="foto1" /><br/>
    <input type="file" name="foto2" /><br/>
    <input type="file" name="foto3" /><br/><br/>

    <b>Article: </b><br/>
    NAME: <input  type="text" name="NAME" /><br/>
    DESCRIPTION: <input  type="text" name="DESCRIPTION" /><br/>
    PRICE: <input  type="text" name="PRICE" /><br/>
    CATEGORYCODE: <input  type="text" name="CATEGORYCODE" /><br/>
    BARGAIN: <input  type="text" name="BARGAIN" /><br/>
    FOTO: <input type="file" name="foto4" /><br/><br/>

    <input type="submit" value="Upload" />
</form>
</body>
</html>