<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercises PHP</title>
    <style>
    </style>
</head>
<body>
<?php echo "Website Address: " . $_POST["website"] . "<br/>"?>
<img src="35template2.php?points=<?php echo $_POST["mark"];?>" />
</body>
</html>