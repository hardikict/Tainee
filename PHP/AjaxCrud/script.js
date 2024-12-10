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

    // Image Upload 

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



    // modal
    $(".edit").on('click', function () {
        var id = $(this).data('id');

        $.ajax({
            url: 'get_data.php',
            type: 'GET',
            data: { id: id },
            success: function (response) {
                var data = JSON.parse(response);
                if (data) {
                    $('#editId').val(data.id);
                    $('#editFirstName').val(data.firstName);
                    $('#editLastName').val(data.lastName);
                    $('#editEmail').val(data.email);
                    $('#editPassword').val(data.empPassword);
                    $('#editConfirmPassword').val(data.confirmPassword);
                    $('#editMobile').val(data.mobileNumber);

                    if (data.gender == 'female') {
                        $('#editFemale').prop('checked', true);
                    } else {
                        $('#editMale').prop('checked', true);
                    }

                    if (data.hobby) {
                        var hobbies = data.hobby.split(',');
                        hobbies.forEach(function (hobby) {
                            $('#edit' + hobby).prop('checked', true);
                        });
                    }

                    $('#editCountry').val(data.country);

                    $('#editProfileImagePreview').attr('src', 'upload/' + data.profileImage).show();
                    
                    //show modal
                    $('#editModal').modal('show');

                }
            }
        });
    });

    //Update
    $('#editForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: 'updateData.php',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                alert(response);
                $('#editModal').modal('hide');
                location.reload("showData.php");
            }
        });
    });

});

