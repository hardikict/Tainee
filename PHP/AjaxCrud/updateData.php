
<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    edit_data($conn, $id);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    update_data($conn, $id);
}

// edit data query
function edit_data($conn, $id)
{
    $query = "SELECT * FROM `AjaxCrud` WHERE id = $id";
    $exec = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($exec);
    echo json_encode($row);
}

// update data query
function update_data($conn, $id)
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $empPassword = $_POST['empPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $profileImage = $_POST['profileImage'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];
    $country = $_POST['country'];

     $query = "UPDATE `AjaxCrud` SET 
                firstName ='$firstName',
                lastName ='$lastName',
                email = '$email',
                empPassword = '$empPassword',
                confirmPassword ='$confirmPassword',
                profileImage = '$profileImage',
                mobileNumber = '$mobileNumber',
                gender = '$gender',
                hobby = '$hobby',
                country = '$country'
                WHERE id = $id";

    $exec = mysqli_query($conn, $query);

    if ($exec) {
        echo "<script>alert('Success! Updated Record')</script>";
    } else {
        echo "<script>alert('Error! Can Not Updated Record')</script>";
    }
}

?>
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>