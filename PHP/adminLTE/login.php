<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-5 mt-5 w-50 ">

        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">UserName</label>
                <input type="text" class="form-control shadow-none" name="userName" id="userName"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control shadow-none" name="password" id="password">
            </div>

            <button type="submit" name="login" class="btn btn-success">Login</button>
            <a href="registration.php" class="ms-3">Now Registration!</a>

        </form>
    </div>

    <?php
     session_start(); 
    include("db_connect.php");
   
    if (isset($_POST['login']))
     {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `registration` WHERE `userName` = '$userName' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        // exit;
        // print_r($userName == $row['userName']);
        // exit;
        if (mysqli_num_rows($result) > 0) {
            if ($password == $row['password'] && $userName == $row['userName']) {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['userName']= $row['userName'];
                // echo $userName;
                // print_r($_SESSION['userName']);
                // exit;
                header("location:insert.php");
                // header("location:dashboard.php");

            } else {
                echo "<script> alert('Worng Password!');</script>";
            }
        }
         else
          {
            echo "<script> alert('User Not Register!');</script>";
        }
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


