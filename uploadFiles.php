<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo 'Hi' . ' ' . $_POST['nombre'];
        print_r($_FILES);

        move_uploaded_file($_FILES["file2upload"]["tmp_name"], "/files/" . $_FILES["file2upload"]["name"]);
    ?>


</body>
</html>