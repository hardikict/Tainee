<?php

include("db_connect.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $empPassword = $_POST['empPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = implode(',', $_POST['hobby']); 
    $country = $_POST['country'];

        
    $profileImage = '';
    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] == 0) {
        $targetDir = "upload/";
        $targetFile = $targetDir . basename($_FILES["profileImage"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $targetFile)) {
                $profileImage = basename($_FILES['profileImage']['name']);
            }
        }
    }

    $query = "UPDATE `AjaxCrud` SET 
              `firstName` = '$firstName', 
              `lastName` = '$lastName', 
              `email` = '$email', 
              `empPassword` = '$empPassword',
              `confirmPassword` = '$confirmPassword',
               `profileImage` = '$profileImage',
              `mobileNumber` = '$mobileNumber', 
              `gender` = '$gender', 
              `hobby` = '$hobby',
              `country` = '$country' 
              WHERE `id` = '$id'";


    if (mysqli_query($conn, $query)) {
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
}

?>


