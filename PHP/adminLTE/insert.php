<?php
include("db_connect.php");
include("heder.php");
include("sideMenu.php");


?>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">InsertData</h3>
        </div>

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
                    <input type="text" class="form-control" id="exampleInputPassword1" name="mobileNumber" placeholder="Enter Mobile Number " require>
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
// include("footer.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['empPassword'], PASSWORD_DEFAULT);
    $confirmPassword = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
    $profileImage = $_FILES['profileImage']['name'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = implode(',', $_POST['hobby']);
    $country = $_POST['country'];


    //img upload
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["profileImage"]["name"])) . " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }


    // $emailExist = "SELECT * FROM `emp_details` WHERE email = '$email'";
    // $result = mysqli_query($conn, $sql);

    // if ($row->num_rows > 0) {
    //     echo "Please! Already Use Email";
    //     exit;
    // }

    // if ($password !== $confirmPassword) {
    //     echo "Password Do Not Match ";
    // }else{
    //     echo "Match Password";
    // }
    // if ($_POST["empPassword"] === $_POST["confirmPassword"]) 
    // {
    //     echo "Password Match ";

    // } else 
    // { 
    //     echo "Password Do Not Match ";
       
    // }
   

    $sql = "INSERT INTO `emp_details` (firstName, lastName, email,empPassword, confirmPassword, profileImage, mobileNumber, gender, hobby,country) VALUES
    ('$firstName', '$lastName','$email', '$password', '$confirmPassword', '$profileImage', '$mobileNumber', '$gender', '$hobby', '$country');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Success! Data Inserted";
    } else {
        echo "Error! Data not Inserted";
    }
}
 include("footer.php");
?>