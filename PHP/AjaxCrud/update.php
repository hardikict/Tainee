<?php
include "heder.php";
include "sideMenu.php";
include "db_connect.php";
?>

<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crud Operation Using Ajax </h1>
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
    <div class="card card-yellow">
        <div class="card-header">
            <h3 class="card-title">Update Data</h3>
        </div>
        <form id="updateForm" action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">FirstName</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">LastName</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="empPassword" name="empPassword" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Enter Confirm Password">
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
                    <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number">
                </div>
                <!-- Gender -->
                <div class="form-check pt-4">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="gender">
                    <label class="form-check-label" for="flexRadioDefault1">
                        female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="gender">
                    <label class="form-check-label" for="flexRadioDefault2">
                        male
                    </label>
                </div>
                <!-- Hobbby -->
                <div class="form-check pt-4">
                    <input class="form-check-input" type="checkbox" value="Cricket" id="hobby" name="hobby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Cricket
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Writing" id="hobby" name="hobby[]">
                    <label class="form-check-label" for="flexCheckChecked">
                        Writing
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Music" id="hobby" name="hobby[]">
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


// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     edit_data($conn, $id);
// }

// if (isset($_POST['id'])) {
//     $id = $_POST['id'];
//     update_data($conn, $id);
// }

// // edit data query
// function edit_data($conn, $id)
// {
//     $query = "SELECT * FROM `AjaxCrud` WHERE id = $id";
//     $exec = mysqli_query($conn, $query);

//     $row = mysqli_fetch_assoc($exec);
//     echo json_encode($row);
// }

// // update data query
// function update_data($conn, $id)
// {
//     $firstName = legal_input($_POST['firstName']);
//     $lastName = legal_input($_POST['lastName']);
//     $email = legal_input($_POST['email']);
//     $empPassword = legal_input($_POST['empPassword']);
//     $confirmPassword = legal_input($_POST['confirmPassword']);
//     $profileImage = legal_input($_POST['profileImage']);
//     $mobileNumber = legal_input($_POST['mobileNumber']);
//     $gender = legal_input($_POST['gender']);
//     $hobby = legal_input($_POST['hobby']);
//     $country = legal_input($_POST['country']);


//     $query = "UPDATE `AjaxCrud` SET 
//                 firstName ='$firstName',
//                 lastName ='$lastName',
//                 email = '$email',
//                 empPassword = '$empPassword',
//                 confirmPassword ='$confirmPassword',
//                 profileImage = '$profileImage',
//                 mobileNumber = '$mobileNumber',
//                 gender = '$gender',
//                 hobby = '$hobby',
//                 country = '$country'
//                 WHERE id = $id";

//     $exec = mysqli_query($conn, $query);

//     if ($exec) {
//         echo "<script>alert('Success! Updated Record')</script>";
//     } else {
//         echo "<script>alert('Error! Can Not Updated Record')</script>";
//     }
// }


// convert illegal input to legal input
// function legal_input($value)
// {
//     $value = trim($value);
//     $value = stripslashes($value);
//     $value = htmlspecialchars($value);
//     return $value;
// }

// ?>
// <script>
//     // GET Data 
//     var editData = function(id) {
//         $('#tableData').load('update.php')

//         $.ajax({
    //         type: "GET",
    //         url: "",
    //         data: {
    //             id: id
    //         },
    //         dataType: "html",
    //         success: function(data) {

    //             //from in get data 
    //             var userData = JSON.parse(data);
    //             $("input[name='id']").val(userData.id);
    //             $("input[name='firstName']").val(userData.firstName);
    //             $("input[name='lastName']").val(userData.lastName);
    //             $("input[name='email']").val(userData.email);
    //             $("input[name='empPassword']").val(userData.empPassword);
    //             $("input[name='confirmPassword']").val(userData.confirmPassword);
    //             $("input[name='profileImage']").val($_FILES(userData.profileImage));
    //             $("input[name='mobileNumber']").val(userData.mobileNumber);
    //             $("input[name='gender']").val(expload(',', userData.gender));
    //             $("input[name='hobby']").val(userData.hobby);
    //             $("input[name='country']").val(userData.country);
    //         }

    //     });
    // };


    // // Update Data 
    // $(document).on('submit', '#updateForm', function(e) {
    //     e.preventDefault();
    //     //   var id= $("input[name ='id']").val();               
    //     var firstName = $("input[name='firstName']").val();
    //     var lastName = $("input[name='lastName']").val();
    //     var email = $("input[name='email']").val();
    //     var empPassword = $("input[name='empPassword']").val();
    //     var confirmPassword = $("input[name ='confirmPassword']").val();
    //     var profileImage = $("input[name='profileImage']").val();
    //     var mobileNumber = $("input[name='mobileNumber']").val();
    //     var gender = $("input[name='gender']").val();
    //     var hobby = $("input[name='hobby']").val();
    //     var country = $("input[name='country']").val();

    //     $.ajax({
    //         method: "POST",
    //         url: "",
    //         data: {
    //             //    id:id,
    //             firstName: firstName,
    //             lastName: lastName,
    //             email: email,
    //             empPassword: empPassword,
    //             confirmPassword: confirmPassword,
    //             profileImage: profileImage,
    //             mobileNumber: mobileNumber,
    //             gender: gender,
    //             hobby: hobby,
    //             country: country

    //         },
    //         success: function(data) {
    //             $('#tableData').load('listdata.php');
    //             $('#msg').html(data);

    //         }
    //     });
    // });
</script>


<?php
include "footer.php";
?>
<!-- <script src="script.js"></script> -->