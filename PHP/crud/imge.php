<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img upload</title>
</head>
<body>
    
<form action="" enctype="multipart/form-data">
    <label for="">Upload File</label>
    <br>
    <br>
    <input type="file" name="updFile">
    <br>
    <br>
    <button type="submit" name="submit">Upload</button>
</form>
<?php
    include("./db_connect.php");


 if (isset($_FILES['updFile'])) {
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";

           $target_dir = "upload/";
           $target_file = $target_dir . basename($_FILES['profileIupdFilemage']['name']);

            if (move_uploaded_file($_FILES['updFile']['tmp_name'], $target_file))
             {
                echo "upload file  success";
            } else {
                echo "Sorry, file not uploaded, please try again!";
            }
        }





?>





</body>
</html>