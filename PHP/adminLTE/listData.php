<?php
include("db_connect.php");
include("heder.php");
include("sideMenu.php");


?>


<!-- Main content -->
<div class="container">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <div class="card-body">
              <?php

              $sql = "SELECT * FROM `emp_details` ";
              $result = mysqli_query($conn, $sql);

              if ($result->num_rows > 0) {
                echo '<table id="listData" class="table table-bordered table-hover">';
                echo "<thead>";
                echo "<tr>

                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm Passwor</th>
                <th>Profile Image</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Country</th>
                <th>Action</th>
              </tr>";

                echo "<tr>";
                echo "</thead>";
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['firstName'] . "</td>";
                  echo "<td>" . $row['lastName'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . password_hash($row['password'], PASSWORD_DEFAULT) . "</td>";
                  echo "<td>" . password_hash($row['confirmPassword'], PASSWORD_DEFAULT) . "</td>";
                  echo "<td>" . $row['profileImage'] . "</td>";
                  echo "<td>" . $row['mobileNumber'] . "</td>";
                  echo "<td>" . $row['gender'] . "</td>";
                  echo "<td>" . $row['hobby'] . "</td>";
                  echo "<td>" . $row['country'] . "</td>";
                  echo "<td>
                            <button class='btn btn-dark'><a href='update.php?id=" . $row['id'] . "'>Update</a></button>
                            <button class='btn btn-danger'><a href='delete.php?id=" . $row['id'] . "'>Delete</a></button>
                      </td>";
                  echo "</tr>";
                }
                echo " </table>";
              }
         
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
 include("footer.php"); 
?>



