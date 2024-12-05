<?php 
// include ("db_connect.php");
// Get Particular Record
// function get_record()
// {
//     global $conn;
//     $id = $_POST['id'];
//     $query = "SELECT * FROM `AjaxCrud` where id ='$id'";
//     $result = mysqli_query($conn,$query);

// while($row=mysqli_fetch_assoc($result))
//     {
//         // $User_data = "";
//         $User_data[0]=$row['id'];
//         $User_data[1]=$row['firstName'];
//         $User_data[2]=$row['lastName'];
//         $User_data[3]=$row['email'];
//         $User_data[4]=$row['empPassword'];
//         $User_data[5]=$row['confirmPassword'];
//         $User_data[6]=$row['profileImage'];
//         $User_data[7]=$row['mobileNumber'];
//         $User_data[8]=$row['gender'];
//         $User_data[9]=$row['hobby'];
//         $User_data[10]=$row['country'];
//     }
//     echo json_encode($User_data);
// }



// // Update Function
// function update_value()
// function update_record()
// {
    
//     global $conn;
    
//     $id = $_POST['id'];
//     $firstName = $_POST['firstName'];
//     $lastName = $_POST['lastName'];
//     $email = $_POST['email'];
//     $empPassword = $_POST['empPassword'];
//     $confirmPassword = $_POST['confirmPassword'];
//     $profileImage = $_POST['profileImage'];
//     $mobileNumber = $_POST['mobileNumber'];
//     $gender = $_POST['gender'];
//     $hobby = $_POST['hobby'];
//     $country = $_POST['country'];


//     $query = "UPDATE `AjaxCrud` SET 
//     firstName ='$firstName',
//     lastName ='$lastName',
//     email = '$email',
//     empPassword = '$empPassword',
//     confirmPassword ='$confirmPassword',
//     profileImage = '$profileImage',
//     mobileNumber = '$mobileNumber',
//     gender = '$gender',
//     hobby = '$hobby',
//     country = '$country'
//     WHERE id = $id";

//     $result = mysqli_query($conn,$query);
//     if($result)
//     {
//         echo ' Your Record Has Been Updated ';
//     }
//     else
//     {
//         echo ' Please Check Your Query ';
//     }
// }
?>
<!-- <script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->