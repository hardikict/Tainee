src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"

// Insert Data
$(document).ready(function () {
    $("#submit").click(function (event) {
        event.preventDefault();
        
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#email").val();
        var empPassword = $("#empPassword").val();
        var confirmPassword = $("#confirmPassword").val();
        var profileImage = $("#profileImage")[0].files[0]; 
        var mobileNumber = $("#mobileNumber").val();
        var gender = $("#gender").val();
        var hobby = $("#hobby").val();
        var country = $("#country").val();

        // //  validation
        if (firstName === "") {
            alert("First name is required.");
            return false;
        }

        if (lastName === "") {
            alert("Last name is required.");
            return false;
        }

        if (email === "") {
            alert("Email is required.");
            return false;
        }

        if (empPassword === "") {
            alert("Password is required.");
            return false;
        }

        if (confirmPassword === "") {
            alert("Confirm password is required.");
            return false;
        }

        if (empPassword !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        if (profileImage == null) {
            alert("Profile image is required.");
            return false;
        }

        if (mobileNumber === "") {
            alert("Mobile number is required.");
            return false;
        }

        if (gender === "") {
            alert("Gender is required.");
            return false;
        }

        if (hobby === "") {
            alert("At least one hobby is required.");
            return false;
        }

        if (country === "") {
            alert("Country is required.");
            return false;
        }

        var formData = new FormData();
        formData.append("firstName", firstName);
        formData.append("lastName", lastName);
        formData.append("email", email);
        formData.append("empPassword", empPassword);
        formData.append("confirmPassword", confirmPassword);
        formData.append("profileImage", profileImage);
        formData.append("mobileNumber", mobileNumber);
        formData.append("gender", gender);
        formData.append("hobby", hobby);
        formData.append("country", country);

        $.ajax({
            url: 'insert.php',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                alert(data);
            },
            error: function () {
                alert("Error! Submitting the form.");
            }
        });
    });
});


// Image Upload 
$(document).ready(function (e) {
    $("#profileImage").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "insert.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $("upload").html(data);
            },
            error: function (data) {
                console.log("error");
                console.log(data);
            }
        });
    }));
});

// Delete data  ajax

function deleteData(id) {
    $.ajax({
        type: "GET",
        url: "delete.php",
        data: {
            id: id
        },
        dataType: "html",
        success: function (data) {
            $('#tableData').load('');
        }
    });
};

// GET Data 
// var editData = function (id) {
    // function editData(id) {
     
    // $('#tableData').load('updateForm.php')

    // $.ajax({
    //         type: "GET",
    //         url: "updateData.php",
    //         data:
    //         {
    //             id: id
    //         },

    //         dataType: "html",
//             success: function (data) 
//             {
//                 var userData = JSON.parse(data);
//                 $("input[name='id']").val(userData.id);
//                 $("input[name='firstName']").val(userData.firstName);
//                 $("input[name='lastName']").val(userData.lastName);
//                 $("input[name='email']").val(userData.email);
//                 $("input[name='empPassword']").val(userData.empPassword);
//                 $("input[name='confirmPassword']").val(userData.confirmPassword);
//                 $("input[name='profileImage']").val($_FILES(userData.profileImage));
//                 $("input[name='mobileNumber']").val(userData.mobileNumber);
//                 $("input[name='gender']").val(expload(',', userData.gender));
//                 $("input[name='hobby']").val(userData.hobby);
//                 $("input[name='country']").val(userData.country);

//             }
//         });
// };

// Update Data 
// $(document).on('update', '#updateForm', function (e) {
//     e.preventDefault();
//     var id = $("input[name ='id']").val();
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
        // method: "POST",
        // url: "updateData.php",
        // data: {

        //     id: id,
        //     firstName: firstName,
        //     lastName: lastName,
        //     email: email,
        //     empPassword: empPassword,
        //     confirmPassword: confirmPassword,
        //     profileImage: profileImage,
        //     mobileNumber: mobileNumber,
        //     gender: gender,
        //     hobby: hobby,
        //     country: country

        // },
        // success: function (data) {
//             $('#tableData').load('showData.php');
//             $('#msg').html(data);
//         }
//     });
// });


//edit
// $(document).on('click', '.edit', function() {
//     var id = $(this).data('id');
//     $.ajax({
//         url: 'showData.php',
//         method: 'POST',
//         data: {
//             id: id
//         },
//         success: function(response) {
//             var data = JSON.parse(response);
//             $('#id').val(data.id);
//             $('#firstName').val(data.firstName);
//             $('#lastName').val(data.lastName);
//             $('#email').val(data.email);
//             $('#empPassword').val(data.empPassword);
//             $('#confirmPassword').val(data.confirmPassword);
//             $('#mobileNumber').val(data.mobileNumber);
//             $('#male').prop('checked', data.gender === 'Male');
//             $('#female').prop('checked', data.gender === 'Female');
//             $('#country').val(data.country);
           
//         }
//     });
// });

