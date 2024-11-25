<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

<?php   
  
?>
    <div class="container pt-5 w-50 ">

        <form action="" method="POST" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control shadow-none" name="name" id="name"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control shadow-none" name="userName" id="userName"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control shadow-none" name="email" id="email"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control shadow-none" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ConfirmPassword</label>
                <input type="password" class="form-control shadow-none" name="confirmPassword"id="confirmPassword">
            </div>

            <button type="submit" name="registration" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <?php
  include("db_connect.php");

    if (isset($_POST['registration'])) {
        $name = $_POST['name'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $emailExist = "SELECT * FROM `registration` WHERE `userName`= '$userName' AND `email` = '$email'";
        $result = mysqli_query($conn, $emailExist);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('UserName or Email Has Allraeay Used!');</script>";
        } else {
            if ($password !== $confirmPassword) {
                echo "<script> alert('Password Not Match!');</script>";
            } else {
                if (!preg_match('/[^A-Za-z0-9]+/', $password) || strlen($password) < 8) {
                    echo "<script> alert('Invalid Password Formet & please Less then 8 charecter!');</script>";
                } else {
                    $sql = "INSERT INTO `registration`(`name`, `userName`, `email`,`password`, `confirmPassword`) VALUES ('$name','$userName','$email','$password','$confirmPassword')";
                    $result = mysqli_query($conn, $sql);
                    echo "<script> alert('Regitration Succesfully!');</script>";
                    header("location:login.php");
                }
            }
        }
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>