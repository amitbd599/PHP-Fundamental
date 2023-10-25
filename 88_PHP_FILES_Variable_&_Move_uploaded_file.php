<?php

if (isset($_FILES["file"])) {
    // echo "<pre>";
    // print_r($_FILES["file"]);
    // echo "</pre>";

    echo $file_name = $_FILES["file"]["name"];

    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $file_name);
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit"> <br>
    </form>

</body>

</html>