<?php
session_start();
include "db_connect";
include "heder.php";
include "sideMenu.php";


//Restriction
// session_start();
// if(isset($_SESSION['login']) || $_SESSION['id'] == ''){
//     header("Location:login.php");
//     die();
// }


?>

<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];
$sql = "SELECT * FROM `registration` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "<script> alert('User Not Found !');</script>";
}
?>

    <div class="container">
        <h1 class="">Welcome to the <?php echo $_SESSION["userName"]; ?> !</h1>
    </div>

<?php include "footer.php"; ?>