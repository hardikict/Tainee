<?php
include("db_connect.php");
$alert= false;
?>
<div class="container">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">InsertData</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">FirstName</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="firstName" placeholder="Enter firstname" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">LastName</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="lastName" placeholder="Enter lastname" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="confirmPassword" placeholder="Enter Confirm Password" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profileImage" id="exampleInputFile" require>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="mobileNumber" placeholder="Enter Mobile Number " require>
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
                    <input class="form-check-input" type="checkbox" value="Runnig" id="runnig" name="hobby[]">
                    <label class="form-check-label" for="flexCheckChecked">
                        Runnig
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Writing" id="writing" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Music
                    </label>
                </div>
                <!-- Country -->
                <div class="dropdown pt-3 pb-4  ">
                    <label for="country">Choose a country:</label>
                    <select name="country" id="country">
                        <option value="option">Select</option>
                        <option value="India">India</option>
                        <option value="UK">New Zealand</option>
                        <option value="Nepal">France</option>
                        <option value="Japan">Japan</option>
                        <option value="Brazil">Austrelia</option>

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
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;
    $confirmPassword =password_hash( $_POST['confirmPassword'],PASSWORD_DEFAULT);
    $profileImage = $_FILES['profileImage'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = implode($_POST['hobby']);
    $country = $_POST['country'];
    $alert=true;

    // $sql = "SELECT 1 FROM emp_details WHERE email = '$email'";
    // $selectresult = mysql_query($sql);
    // if(mysql_num_rows($selectresult)>0)
    // {
    //      echo'email already exists';
    // }
    // elseif($password != $confirmPassword){
    //      echo "passwords doesn't match";
    // }
    // else{
    //   $query = "INSERT INTO `register` (username, password,confirmpassword, email) VALUES ('$username', '$password', '$cpassword', '$email')";
    //   $result = mysql_query($query);
    //   if($result){
    //      $msg = "User Created Successfully.";
    //   }


    $sql = "INSERT INTO `emp_details` (firstName, lastName, email,empPassword, confirmPassword, profileImage, mobileNumber, gender, hobby,country) VALUES
     ('$firstName', '$lastName','$email', '$password', '$confirmPassword', '$profileImage', '$mobileNumber', '$gender', '$hobby', '$country');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Success! Data Inserted";
        // if($alert)
        // {
        //     echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        //         <strong>Suceess!</strong> Your Data Inserted.
        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //         </div>';
        // }
    } else {
        echo "Error! Data not Inserted";
    }
}




?>