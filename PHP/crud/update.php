<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <?php include("db_connect.php");

     //Get All Data 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `emp` WHERE id = '$id' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $empPassword = $row['empPassword'];
        $confirmPassword = $row['confirmPassword'];
        $profileImage = $row['profileImage'];
        $phoneNumber = $row['phoneNumber'];
        $gender = $row['gender'];
        $hobby = explode(",", $row['hobby']);
        $country = $row['country'];
    }
    ?>

    <form action="" method="POST">
        <div class="container mt-5 ">
            <h3 class="text-center">Update Form</h3>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">FirstName</label>
                <input type="text" class="form-control" value="<?php echo $row['firstName']; ?>" id="firstName" name="firstName">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">LastName</label>
                <input type="text" class="form-control" value="<?php echo $row['lastName']; ?>" id="lastName" name="lastName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" value="<?php echo $row['empPassword']; ?>" id="empPassword" name="empPassword">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" value="<?php echo $row['confirmPassword']; ?>" id="confirmPassword" name="confirmPassword">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" value="<?php echo $row['profileImage']; ?>" id="profileImage" name="profileImage">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="text" class="form-control" value="<?php echo $row['phoneNumber']; ?>" id="phoneNumber" name="phoneNumber">
            </div>
            <!-- Gender -->
            <div class="form-check pt-4">
                <input class="form-check-input" type="radio" name="gender" value="female" id="gender"
                    <?php

                    if ($row['gender'] == "female") {
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

                    if ($row['gender'] == "male") {
                        echo "checked";
                    }
                    ?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    male
                </label>
            </div>
            <!-- Hobbby -->
            <div class="form-check pt-4">
                <input class="form-check-input" type="checkbox" id="cricket" name="hobby[]" value="Cricket" <?= in_array('Cricket', explode(',', $row['hobby'])) ? 'checked' : '' ?>>
                <label class="form-check-label" for="flexCheckDefault">
                    Cricket
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Runnig" <?= in_array('Runnig', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="runnig" name="hobby[]">
                <label class="form-check-label" for="flexCheckChecked">
                    Runnig
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Writing" <?= in_array('Writing', explode(',', $row['hobby'])) ? 'checked' : '' ?> id="writing" name="hobby[]">
                <label class="form-check-label" for="flexCheckDefault">
                    Writing
                </label>
            </div>
            <!-- Country -->
            <div class="dropdown pt-3 pb-4  ">
                <label for="country">Choose a country:</label>
                <select name="country" id="country">
                    <option value="option">Select</option>
                    <option value="India"<?= ($row['country'] == 'India') ? 'selected' : '' ?>>India</option>
                    <option value="UK"<?= ($row['country'] == 'UK') ? 'selected' : '' ?>>Uk</option>
                    <option value="Nepal"<?= ($row['country'] == 'Nepal') ? 'selected' : '' ?>>Nepal</option>
                    <option value="Japan"<?= ($row['country'] == 'Japan') ? 'selected' : '' ?>>Japan</option>
                    <option value="Brazil"<?= ($row['country'] == 'Brazil') ? 'selected' : '' ?>>Brazil</option>
                    <option value="Afganistan"<?= ($row['country'] == 'Afganistan') ? 'selected' : '' ?>>Afganitan</option>
                </select>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
    </form>
    </div>
    <?php


    if (isset($_POST['update'])) {
       $firstName = $_POST['firstName'];
       $lastName = $_POST['lastName'];
       $email = $_POST['email'];
       $empPassword = $_POST['empPassword'];
       $confirmPassword = $_POST['confirmPassword'];
       $profileImage = $_POST['profileImage'];
       $phoneNumber = $_POST['phoneNumber'];
       $gender = $_POST['gender'];
       $hobby = implode(",", $_POST['hobby']);
       $country = $_POST['country'];

        //update Query

        $sql = "UPDATE `emp` SET firstName = '$firstName',lastName='$lastName',email='$email',empPassword='$empPassword',confirmPassword='$confirmPassword',profileImage='$profileImage',phoneNumber='$phoneNumber',gender='$gender',hobby='$hobby',country='$country' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        

        if ($result) {
            echo "Update Data successfully";
              header("Location:/fetch.php"); 
              
        } else {
            echo "Can not Update data";
             
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>