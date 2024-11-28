<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img upload</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        Select Image File to Upload:
        <br>
        <br>
        <input type="file" name="file">
        <br>
        <br>
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    include("./db_connect.php");

    if (isset($_POST["upload"])) {
        // echo "<pre>"; print_r($_FILES);
        if (!empty($_FILES["file"]["name"])) {
            echo "<pre>";
            print_r($_FILES);

            $targetDir = "upload/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Upload file to server 
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) 
            {
                $sql = $conn->query("INSERT INTO `image` (imageUpload) VALUES ('$fileName')");
                if ($sql) {
                    echo "The file has been uploaded successfully.";
                } else {
                    echo "File upload failed, please try again.";
                }
            } else {
                echo "Opp's!, there was an error uploading your file.";
            }
        } else {
            echo "<script>alert('Please select a file to upload')</script>";
        }
    }
    ?>
</body>
</html>