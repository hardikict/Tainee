<?php

session_start();
//Restriction
// if(isset($_SESSION['login'])){
//     header("Location:login.php");
//     die();
// }
// if (!isset($_SESSION['id'])) {
//     header("Location: login.php");
//     exit();
// }

//Restriction
// if(!isset($_SESSION['id'])|| $_SESSION['login'] !== true ){
//     header("Location:login.php");
//     // header("Location:dashboard.php");
//     exit;
// }

include("db_connect.php");
include("heder.php");
include("sideMenu.php");


?>
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crud Operation </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">InsertData</h3>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">FirstName</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="firstName" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">LastName</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="lastName" placeholder="Enter lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="empPassword" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword" placeholder="Enter Confirm Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profileImage" id="profileImage">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="mobileNumber" placeholder="Enter Mobile Number">
                </div>
                <!-- Gender -->
                <div class="form-check pt-4">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="gender">
                    <label class="form-check-label" for="flexRadioDefault1">
                        female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="gender1">
                    <label class="form-check-label" for="flexRadioDefault2">
                        male
                    </label>
                </div>
                <!-- Hobbby -->
                <div class="form-check pt-4">
                    <input class="form-check-input" type="checkbox" value="Cricket" id="cricket" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Cricket
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Writing" id="Writing" name="hobby[]">
                    <label class="form-check-label" for="flexCheckChecked">
                        Writing
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Music" id="Music" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Music
                    </label>
                </div>
                <!-- Country -->
                <div class="dropdown pt-3 pb-4  ">
                    <label for="country">Choose a country:</label>
                    <select name="country" id="country">
                        <option>Select</option>
                        <option value="India">India</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="France">France</option>
                        <option value="Japan">Japan</option>
                        <option value="Austrelia">Austrelia</option>

                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $empPassword = $_POST['empPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    // $password = password_hash($_POST['empPassword'], PASSWORD_DEFAULT);
    // $confirmPassword = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
    $profileImage = $_FILES['profileImage']['name'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = implode(',', $_POST['hobby']);
    $country = $_POST['country'];

    // Image Upload

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
    $uploadOk = 1;
    echo $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profileImage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
         echo "Success! uploading your file.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Validation FirstName Required.
    if (empty($_POST['firstName'])) {
        echo "<script> alert('Please enter your First Name!');</script>";
    } else {
        // Required LastName.
        if (empty($_POST['lastName'])) {
            echo "<script> alert('Please enter your last Name!');</script>";
        } else {
            //check email Exist
            $emailExist = "SELECT * FROM `emp_details` WHERE email = '$email'";
            $result = mysqli_query($conn, $emailExist);

            // Email Formet Check
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script> alert('Invalid Email Formet!');</script>";
            } elseif (mysqli_num_rows($result) > 0) {

                echo "<script> alert('Email Already exist!');</script>";
            } else {
                if ($empPassword !== $confirmPassword) {
                    echo "<script> alert('Password Do Not Match!');</script>";
                } else {
                    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    // $hashedConfirmPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);

                    //password lenth check
                    if (!preg_match('/[^A-Za-z0-9]+/', $empPassword) || strlen($empPassword) < 8) {
                        echo "<script> alert('Invalid Password Formet & please Less then 8 charecter!');</script>";
                    } else {
                        // Mobile Number Validation
                        if (empty($mobileNumber)) {
                            echo "<script> alert('Mobile number is Required!');</script>";
                        } elseif (!preg_match("/^[0-9]{10}$/", $mobileNumber)) {

                            echo "<script> alert('Only 10 digit number is allowed!');</script>";
                        } else {
                            //Radio Button Validation
                            if (!isset($_POST['gender']) || empty($_POST['gender'])) {
                                echo "<script> alert('Gender Selection Required');</script>";
                            } else {
                                // Hashing the password
                                //  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                                //  $hashedConfirmPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);

                                $sql = "INSERT INTO `emp_details` (firstName, lastName, email, empPassword, confirmPassword, profileImage, mobileNumber, gender, hobby, country) 
                                        VALUES ('$firstName', '$lastName', '$email', '$empPassword', '$confirmPassword', '$profileImage', '$mobileNumber', '$gender', '$hobby', '$country');";
                                $result = mysqli_query($conn, $sql);


                                echo "<script> alert('Your Registion Successfull!');</script>";
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
<?php include("footer.php"); ?>