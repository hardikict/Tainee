
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
    $firstName = legal_input($_POST['firstName']);
    $lastName = legal_input($_POST['lastName']);
    $email = legal_input($_POST['email']);
    $empPassword = legal_input($_POST['empPassword']);
    $confirmPassword = legal_input($_POST['confirmPassword']);
    $profileImage = legal_input($_POST['profileImage']);
    $mobileNumber = legal_input($_POST['mobileNumber']);
    $gender = legal_input($_POST['gender']);
    $hobby = legal_input($_POST['hobby']);
    $country = legal_input($_POST['country']);


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


// convert illegal input to legal input
function legal_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
?>
