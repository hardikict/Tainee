src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"

// Insert Data
$(document).ready(function () {
    $("#submit").click(function () {
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#email").val();
        var empPassword = $("#empPassword").val();
        var confirmPassword = $("#confirmPassword").val();
        var profileImage = $_FILES($("#profileImage").val());
        var mobileNumber = $("#mobileNumber").val();
        var gender = $("#gender").val();
        var hobby = implode(',', ("#hobby").val());
        var country = $("#country").val();


        $.ajax({
            url: 'insert.php',
            method: 'POST',
            data: {

                firstName: firstName,
                lastName: lastName,
                email: email,
                empPassword: empPassword,
                confirmPassword: confirmPassword,
                profileImage: profileImage,
                mobileNumber: mobileNumber,
                gender: gender,
                hobby: hobby,
                country: country

            },
            success: function (data) {
                alert(data);
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
var editData = function (id) {
    // function editData(id) {
    $('#tableData').load('updateForm.php')
    alert("Hello");
    $.ajax({
            type: "GET",
            url: "updateData.php",
            data:
            {
                id: id
            },

            dataType: "html",
            success: function (data) 
            {
                var userData = JSON.parse(data);
                $("input[name='id']").val(userData.id);
                $("input[name='firstName']").val(userData.firstName);
                $("input[name='lastName']").val(userData.lastName);
                $("input[name='email']").val(userData.email);
                $("input[name='empPassword']").val(userData.empPassword);
                $("input[name='confirmPassword']").val(userData.confirmPassword);
                $("input[name='profileImage']").val($_FILES(userData.profileImage));
                $("input[name='mobileNumber']").val(userData.mobileNumber);
                $("input[name='gender']").val(expload(',', userData.gender));
                $("input[name='hobby']").val(userData.hobby);
                $("input[name='country']").val(userData.country);

            }
        });
};

// Update Data 
$(document).on('update', '#updateForm', function (e) {
    e.preventDefault();
    var id = $("input[name ='id']").val();
    var firstName = $("input[name='firstName']").val();
    var lastName = $("input[name='lastName']").val();
    var email = $("input[name='email']").val();
    var empPassword = $("input[name='empPassword']").val();
    var confirmPassword = $("input[name ='confirmPassword']").val();
    var profileImage = $("input[name='profileImage']").val();
    var mobileNumber = $("input[name='mobileNumber']").val();
    var gender = $("input[name='gender']").val();
    var hobby = $("input[name='hobby']").val();
    var country = $("input[name='country']").val();

    $.ajax({
        method: "POST",
        url: "updateData.php",
        data: {

            id: id,
            firstName: firstName,
            lastName: lastName,
            email: email,
            empPassword: empPassword,
            confirmPassword: confirmPassword,
            profileImage: profileImage,
            mobileNumber: mobileNumber,
            gender: gender,
            hobby: hobby,
            country: country

        },
        success: function (data) {
            $('#tableData').load('showData.php');
            $('#msg').html(data);
        }
    });
});

