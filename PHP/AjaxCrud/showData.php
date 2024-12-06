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


  if (count($fetchData) > 0)
  {
    foreach ($fetchData as $rows) 
    {
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
          
          
          <td><button  onclick='editData(" . $rows['id'] . ")'>Update</button></td>
          <td><a href='' onclick='deleteData(" . $rows['id'] . ")'>Delete</a></td>  
           
          </tr>";
    }
  }
  echo "</table>";
}

include("footer.php");
?>
  <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- <td><a href='' onclick='editData(" . $rows['id'] . ")'>Edit</a></td> -->
  <!-- <td><button class='edit' data-id='" . $rows['id'] . "'>Update</button></td> -->

   