<?php
// include "heder.php";
// include "sideMenu.php";
// include("db_connect.php");

// $db=$conn;
// fetch query
// function fetch_data($conn)
// {
//     //  global $db;
//     $query = "SELECT * from `AjaxCrud` ";
//     $exec = mysqli_query($conn, $query);
//     if (mysqli_num_rows($exec) > 0) {
//         $row = mysqli_fetch_all($exec, MYSQLI_ASSOC);
//         return $row;
//     } else {
//         return $row = [];
//     }
// }
// $fetchData = fetch_data($conn);
// show_data($fetchData);
// function show_data($fetchData)
// {
    echo '<table border="1">
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
//     if (count($fetchData) > 0) {
//         //   $sn=1;
//         foreach ($fetchData as $data) {
//             echo "<tr>
//            <td>" . $data['id'] . "</td>
//           <td>" . $data['firstName'] . "</td>
//           <td>" . $data['lastName'] . "</td>
//           <td>" . $data['email'] . "</td>
//           <td>" . $data['empPassword'] . "</td>
//           <td>" . $data['confirmPassword'] . "</td>
//           <td>  <img src='upload/" . $data['profileImage'] . "' width='100' height='100' alt='Profile Image'></td>
//           <td>" . $data['mobileNumber'] . "</td>  
//           <td>" . $data['gender'] . "</td>
//           <td>" . $data['hobby'] . "</td>
//           <td>" . $data['country'] . "</td>
//           <td><a href='updateForm.php?edit=" . $data['id'] . "'>Edit</a></td>
//           <td><a href='delete.php?deleteData=" . $data['id'] . "'>Delete</a></td>
//    </tr>";

//             //   $sn++; 
//         }
//     }
//     echo "</table>";
// }
?>
<!-- <script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->