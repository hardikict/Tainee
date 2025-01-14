<?php
include "heder.php";
include "sideMenu.php";
include "function.php";



$id = $_GET['id'];
$updation = new employee();
$sql = $updation->fetchrecord($id);


while ($row = mysqli_fetch_array($sql)) {
?>

    <div class="container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Crud Operation Using OOP's </h1>
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

        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Update Data</h3>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">FirstName</label>
                        <input type="text" class="form-control" value=" <?php echo $row['firstName'] ?>"
                            id="exampleInputEmail1" name="firstName" placeholder="Enter firstname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">LastName</label>
                        <input type="text" class="form-control" value=" <?php echo $row['lastName'] ?>"
                            id="exampleInputEmail1" name="lastName" placeholder="Enter lastname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" value=" <?php echo $row['email'] ?>"
                            id="exampleInputEmail1" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" value=" <?php echo $row['empPassword'] ?>"
                            id="exampleInputPassword1" name="empPassword" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" value=" <?php echo $row['confirmPassword'] ?>"
                            id="exampleInputPassword1" name="confirmPassword" placeholder="Enter Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="profileImage"
                                    value=" <?php echo $row['profileImage'] ?>" id="profileImage">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile Number</label>
                        <input type="text" class="form-control" value=" <?php echo $row['mobileNumber'] ?>"
                            id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number">
                    </div>
                    <!-- Gender -->
                    <div class="form-check pt-4">
                        <input class="form-check-input" type="radio" name="gender" value="female" id="gender" <?php
                                                                                                                if ($row['gender'] == 'female') {
                                                                                                                    echo "checked";
                                                                                                                }
                                                                                                                ?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                            female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="gender1" <?php
                                                                                                                if ($row['gender'] == 'male') {
                                                                                                                    echo "checked";
                                                                                                                }
                                                                                                                ?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                            male
                        </label>
                    </div>
                    <!-- Hobbby -->
                    <div class="form-check pt-4">
                        <input class="form-check-input" type="checkbox" value="Cricket"
                            <?= in_array('Cricket', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="cricket"
                            name="hobby[]">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cricket
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Writing" <?= in_array('Writing', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="Writing" name="hobby[]">
                        <label class="form-check-label" for="flexCheckChecked">
                            Writing
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Music" <?= in_array('Music', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="Music" name="hobby[]">
                        <label class="form-check-label" for="flexCheckDefault">
                            Music
                        </label>
                    </div>
                    <!-- Country -->
                    <div class="dropdown pt-3 pb-4  ">
                        <label for="country">Choose a country:</label>
                        <select name="country" id="country">
                            <option>Select</option>
                            <option value="India" <?= ($row['country'] == 'India') ? 'selected' : '' ?>>India</option>
                            <option value="New Zealand" <?= ($row['country'] == 'New Zealand') ? 'selected' : '' ?>>New Zealand
                            </option>
                            <option value="France" <?= ($row['country'] == 'France') ? 'selected' : '' ?>>France</option>
                            <option value="Japan" <?= ($row['country'] == 'Japan') ? 'selected' : '' ?>>Japan</option>
                            <option value="Austrelia" <?= ($row['country'] == 'Austrelia') ? 'selected' : '' ?>>Austrelia
                            </option>

                        </select>
                    </div>
                </div>

            <?php } ?>

            <div class="card-footer">
                <button type="submit" name="update" value="submit" class="btn btn-success">Update</button>
            </div>
            </form>
        </div>
    </div>
    <?php
    include "footer.php";

    //function call
    $upd = new employee();

    //updation data 
    if (isset($_POST['update'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $empPassword = $_POST['empPassword'];
        $confirmPassword = $_POST['confirmPassword'];
        $profileImage = $_FILES['profileImage']['name'];
        $mobileNumber = $_POST['mobileNumber'];
        $gender = $_POST['gender'];
        $hobby = implode(',', $_POST['hobby']);
        $country = $_POST['country'];


        //Image upload

        
        if (isset($_FILES['profileImage'])) {
            $fileupload = new upload();
            $fileupload->startupload();
            if ($fileupload->uploadfile()) {
                echo 'success! Uploading image ';
            }
        }


        //   Validation Required FirstName.
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
                        //password lenth check
                        if (!preg_match('/[^A-Za-z0-9]+/', $empPassword) || strlen($empPassword) < 8) {
                            echo "<script> alert('Invalid Password Formet & please Less then 8 charecter!');</script>";
                        } else {
                            // Profile Image validation
                            if (!empty($profileImage['name'])) {
                                echo "<script> alert('Please upload a profile image!');</script>";
                            } else {
                                
                                $fileupload = new upload();
                                $fileupload->startupload();
                                if ($fileupload->uploadfile()) {
                                    echo "<script> alert('Error uploading profile image!');</script>";
                                }

                            // Mobile Number Validation
                            if (empty($mobileNumber)) {
                                echo "<script> alert('Mobile number is Required!');</script>";
                            }
                             elseif (preg_match("/^[0-9]{12}$/", $mobileNumber)) {

                                echo "<script> alert('Only 10 digit number is allowed!');</script>";
                            } 
                            else {
                                //Radio Button Validation
                                if (!isset($_POST['gender']) || empty($_POST['gender'])) {
                                    echo "<script> alert('Gender Selection Required');</script>";
                                } else {
                                    // Hobby validation
                                    if (empty($hobby)) {
                                        echo "<script> alert('Please select at least one hobby!');</script>";
                                    }
                                    // Country validation
                                    elseif (empty($country)) {
                                        echo "<script> alert('Please select a country!');</script>";
                                    }

                                    $sql = $updation->updateData($firstName, $lastName, $email, $empPassword, $confirmPassword, $profileImage, $mobileNumber, $gender, $hobby, $country, $id);
                                    if ($sql) {
                                        echo "<script>alert('Record Updated Successfully')</script>";
                                    } else {
                                        echo "<script>alert('Record Not Updated')</script>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    }

    ?>