<?php
include "heder.php";
include "sideMenu.php";
include("db_connect.php");

$fetchData = fetch_data($conn);
show_data($fetchData);

// fetch query
function fetch_data($conn)
{
  $query = "SELECT * from `AjaxCrud` ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $row;
  } else {
    return $row = [];
  }
}

function show_data($fetchData)
{
  echo '<table border="1" id="tableData">
        <tr>
            <th>ID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>email</th>
            <th>empPassword</th>
            <th>confirmPassword</th>
            <th>profileImage</th>
            <th>mobileNumber</th>
            <th>gender</th>
            <th>hobby</th>
            <th>country</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>';


  if (count($fetchData) > 0) {
    foreach ($fetchData as $rows) {
      echo "<tr>
          <td>" . $rows['id'] . "</td>
          <td>" . $rows['firstName'] . "</td>
          <td>" . $rows['lastName'] . "</td>
          <td>" . $rows['email'] . "</td>
          <td>" . $rows['empPassword'] . "</td>
          <td>" . $rows['confirmPassword'] . "</td>
          <td>  <img src='upload/" . $rows['profileImage'] . "' width='100' height='100' alt='Profile Image'></td>
          <td>" . $rows['mobileNumber'] . "</td>  
          <td>" . $rows['gender'] . "</td>
          <td>" . $rows['hobby'] . "</td>
          <td>" . $rows['country'] . "</td>
      
          <td><button  class='edit' data-id='" . $rows['id'] . "'>Update</button></td> 
          <td><a href='' onclick='deleteData(" . $rows['id'] . ")'>Delete</a></td>  
          
           
          </tr>";
    }
  }
  echo "</table>";
}

include("footer.php");
?>

<!-- Modal HTML -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Update Data Ajax</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Edit Form -->
        <form id="editForm" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" id="editId">
          <div class="form-group">
            <label for="editFirstName">First Name</label>
            <input type="text" class="form-control" id="editFirstName" name="firstName">
          </div>
          <div class="form-group">
            <label for="editLastName">Last Name</label>
            <input type="text" class="form-control" id="editLastName" name="lastName">
          </div>
          <div class="form-group">
            <label for="editEmail">Email</label>
            <input type="email" class="form-control" id="editEmail" name="email">
          </div>
          <div class="form-group">
            <label for="editPassword">Password</label>
            <input type="password" class="form-control" id="editPassword" name="empPassword">
          </div>
          <div class="form-group">
            <label for="editConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="editConfirmPassword" name="confirmPassword">
          </div>
          <!-- <div class="form-group">
              <label for="profileImage">profileImage</label>
              <input type="file" class="form-control" id="editprofileImage" name="profileImage">
            </div> -->
        
          <div class="form-group">
            <label for="editMobile">Mobile Number</label>
            <input type="text" class="form-control" id="editMobile" name="mobileNumber">
          </div>
          <!-- Gender -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="editFemale" value="female">
            <label class="form-check-label" for="editFemale">Female</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="editMale" value="male">
            <label class="form-check-label" for="editMale">Male</label>
          </div>
          <!-- Hobby -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Cricket" id="editCricket" name="hobby[]">
            <label class="form-check-label" for="editCricket">Cricket</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Writing" id="editWriting" name="hobby[]">
            <label class="form-check-label" for="editWriting">Writing</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Music" id="editMusic" name="hobby[]">
            <label class="form-check-label" for="editMusic">Music</label>
          </div>
          <!-- Country -->
          <div class="form-group">
            <label for="editCountry">Country</label>
            <select class="form-control" id="editCountry" name="country">
              <option value="India">India</option>
              <option value="New Zealand">New Zealand</option>
              <option value="France">France</option>
              <option value="Japan">Japan</option>
              <option value="Australia">Australia</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>