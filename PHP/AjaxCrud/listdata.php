<?php
// include "heder.php";
// include "sideMenu.php";
// include "db_connect.php";


echo '<table id="tabledata" class="table table-bordered table-hover">';
echo "<thead>";
echo "<tr>
                                    <th>Id</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>empPassword</th>
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

// $sql = "SELECT * FROM AjaxCrud";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<td>" . $row['id'] . "</td>";
//         echo "<td>" . $row['firstName'] . "</td>";
//         echo "<td>" . $row['lastName'] . "</td>";
//         echo "<td>" . $row['email'] . "</td>";
//         echo "<td>" . $row['empPassword'] . "</td>";
//         echo "<td>" . $row['confirmPassword'] . "</td>";

//         if (!empty($row['profileImage'])) {
//             echo "<td><img src='upload/" . $row['profileImage'] . "' width='100' height='100' alt='Profile Image'></td>";
//         } else {
//             echo "<td>No Image Uploaded</td>";
//         }
//         echo "<td>" . $row['mobileNumber'] . "</td>";
//         echo "<td>" . $row['gender'] . "</td>";
//         echo "<td>" . $row['hobby'] . "</td>";
//         echo "<td>" . $row['country'] . "</td>";
//         echo "<td>
//                 <button class='btn btn-dark'><a href='update.php?id=" . $row['id'] . "'>Update</a></button>
//                 <button class='btn btn-danger'><a href='delete.php?id=" . $row['id'] . "'>Delete</a></button>
//              </td>";
//         //    echo  " <td><a href='javascript:void(0)' onclick='editData(".$row['id'].")'>Edit</a></td>";
//         //    echo "<td><a href='javascript:void(0)' onclick='deleteData(".$row['id'].")'>Delete</a></td>";  
//         echo "</tr>";
//     }
//     echo " </table>";
// }
