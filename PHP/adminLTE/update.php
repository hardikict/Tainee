<?php
include("db_connect.php");
$alert = false;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `emp_details` WHERE id ='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $password = password_hash($row['empPassword'], PASSWORD_DEFAULT);
    $confirmPassword = password_hash($row['confirmPassword'], PASSWORD_DEFAULT);
    $profileImage = $row['profileImage'];
    $mobileNumber = $row['mobileNumber'];
    $gender = $row['gender'];
    $hobby = explode(',', $row['hobby']);
    $country = $row['country'];
}
?>
<?php
    include("heder.php");
    include("sideMenu.php");
?>

<!-- update here  -->
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Update Data</h3>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">FirstName</label>
                    <input type="text" class="form-control" value="<?php echo $row['firstName']; ?>" id="exampleInputEmail1" name="firstName" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">LastName</label>
                    <input type="text" class="form-control" value="<?php echo $row['lastName']; ?>" id="exampleInputEmail1" name="lastName" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" id="exampleInputEmail1" name="email" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" value="<?php echo $row['empPassword']; ?>" id="exampleInputPassword1" name="empPassword" require>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" value="<?php echo $row['confirmPassword']; ?>" id="exampleInputPassword1" name="confirmPassword" require>
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
                    <input type="text" class="form-control" value="<?php echo $row['mobileNumber']; ?>" id="exampleInputPassword1" name="mobileNumber" require>
                </div>
                <!-- Gender -->
                <div class="form-check pt-4">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="gender"
                        <?php
                        if ($row['gender'] == 'female') {
                            echo "checked";
                        }
                        ?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="gender1"
                        <?php
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
                    <input class="form-check-input" type="checkbox" value="Cricket" <?= in_array('Cricket', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="cricket" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Cricket
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Writing" <?= in_array('Writing', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="Writing" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Writing
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Writing" <?= in_array('Writing', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="writing" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Music
                    </label>
                </div>
                <!-- Country -->
                <div class="dropdown pt-3 pb-4  ">
                    <label for="country">Choose a country:</label>
                    <select name="country" id="country">
                        <option value="option">Select</option>
                        <option value="India" <?= ($row['country'] == 'India') ? 'selected' : '' ?>>India</option>
                        <option value="UK" <?= ($row['country'] == 'UK') ? 'selected' : '' ?>>UK</option>
                        <option value="France" <?= ($row['country'] == 'France') ? 'selected' : '' ?>>France</option>
                        <option value="Japan" <?= ($row['country'] == 'Japan') ? 'selected' : '' ?>>Japan</option>
                        <option value="Austrelia" <?= ($row['country'] == 'Austrelia') ? 'selected' : '' ?>>Austrelia</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" value="submit" name="update" class="btn btn-success">update</button>
            </div>
        </form>
    </div>
</div>

<?php
include("footer.php");


if (isset($_POST['update'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['empPassword'], PASSWORD_DEFAULT);
    $confirmPassword = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
    $profileImage = $_POST['profileImage'];
    $mobileNumber = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $hobby = implode(',', $_POST['hobby']);
    $country = $_POST['country'];

    $alert = true;

    $sql = "UPDATE `emp_details` SET firstName = '$firstName' ,lastName ='$lastName', email = '$email', empPassword = '$password', confirmPassword = '$confirmPassword', profileImage = '$profileImage', mobileNumber = '$mobileNumber', gender = '$gender', hobby= '$hobby', country ='$country' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Success! Data Updated";
        header('loaction: listData.php');
        // if($alert)
        // {
        //     echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        //         <strong>Suceess!</strong> Your Data Inserted.
        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //         </div>';
        // }
    } else {
        echo "Error! Data not Updated";
    }
}

?>