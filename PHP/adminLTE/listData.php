<?php 
include("db_connect.php");
$sql ="SELECT * FROM `emp_details` ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0)  
{ 
    echo "<table>";
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
    </tr>";
    
echo "<tr>";
    while($row = mysqli_fetch_assoc($result)) 
    { 
        echo"<td>". $row['id']."</td>";
        echo"<td>". $row['firstName']."</td>";
        echo"<td>". $row['lastName']."</td>";
        echo"<td>". $row['email']."</td>";
        echo"<td>". password_hash($row['password'], PASSWORD_DEFAULT)."</td>" ;
        echo"<td>". password_hash( $row['confirmPassword'],PASSWORD_DEFAULT)."</td>";
        echo"<td>". $row['profileImage']."</td>";
        echo"<td>". $row['mobileNumber']."</td>";
        echo"<td>". $row['gender']."</td>";
        echo"<td>". implode($row['hobby'])."</td>";
        echo"<td>". $row['country']."</td>";
    } 
    "</tr>";
    echo"</table>";
}  
else { 
    echo "0 results"; 
} 

?>