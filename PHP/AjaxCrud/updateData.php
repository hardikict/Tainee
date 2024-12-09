<?php

include("db_connect.php");

// if (isset($_GET['id'])) {
//      $id = $_GET['id'];
//     edit_data($conn, $id);
// }

// if (isset($_POST['id'])) {
//     $id = $_POST['id'];
//     update_data($conn, $id);
// }

// function edit_data($conn, $id) {
//     $query = "SELECT * FROM `AjaxCrud` WHERE id = $id";
//     $exec = mysqli_query($conn, $query);
    
//     if ($exec) {
//         $row = mysqli_fetch_assoc($exec);
//         echo json_encode($row);
//     } else {
//         echo json_encode(["error" => "No data found"]);
//     }
// }


// function update_data($conn, $id) {
//     $firstName = $_POST['firstName'];
//     $lastName = $_POST['lastName'];
//     $email = $_POST['email'];
//     $empPassword = $_POST['empPassword'];
//     $confirmPassword = $_POST['confirmPassword'];
//     $profileImage = $_FILES['profileImage']['name'];  
//     $mobileNumber = $_POST['mobileNumber'];
//     $gender = $_POST['gender'];
//     $hobby = implode(",", $_POST['hobby']); 
//     $country = $_POST['country'];

//     if ($_FILES['profileImage']['error'] == 0) {
      
//         move_uploaded_file($_FILES['profileImage']['tmp_name'], "upload/" . $profileImage);
//     }

//     // Update the database
//     $query = "UPDATE `AjaxCrud` SET 
//         firstName = '$firstName',
//         lastName = '$lastName',
//         email = '$email',
//         empPassword = '$empPassword',
//         confirmPassword = '$confirmPassword',
//         profileImage = '$profileImage',
//         mobileNumber = '$mobileNumber',
//         gender = '$gender',
//         hobby = '$hobby',
//         country = '$country'
//         WHERE id = $id";

//     $exec = mysqli_query($conn, $query);

//     if ($exec) {
//         echo "<script>alert('Success! Updated Record')</script>";
//     } else {
//         echo "<script>alert('Error! Can Not Update Record')</script>";
//     }
// }




if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $empPassword = $_POST['empPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
    $country = $_POST['country'];

    $query = "UPDATE `AjaxCrud` SET 
              `firstName` = '$firstName', 
              `lastName` = '$lastName', 
              `email` = '$email', 
              `empPassword` = '$empPassword',
              `confirmPassword` = '$confirmPassword',
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


