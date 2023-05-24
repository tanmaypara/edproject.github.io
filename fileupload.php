<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" class="file" name="uploadfile"> <br>
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>
<?php


$filename= $_FILES["uploadfile"]["name"];
$tempname= $_FILES["uploadfile"]["tmp_name"];
// print_r($_FILES["uploadfile"]);
$folder = "images/".$filename;
// echo $folder;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder'>";


?>
<img src="images/facebook.png" alt="" srcset="">