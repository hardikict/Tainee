<?php
include "heder.php";
include "sideMenu.php";

include("db_connect.php");

$fetchData= fetch_data($conn);
show_data($fetchData);
// fetch query
function fetch_data($conn){
  $query="SELECT * from `AjaxCrud` ORDER BY id DESC";
  $exec=mysqli_query($conn, $query);
  if(mysqli_num_rows($exec)>0){

    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}


function show_data($fetchData){


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
        

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$sn."</td>
          <td>".$data['firstName']."</td>
          <td>".$data['lastName']."</td>
          <td>".$data['email']."</td>
          <td>".$data['empPassword']."</td>
          <td>".$data['confirmPassword']."</td>
          <td>".$data['profileImage']."</td>
          <td>".$data['mobileNumber']."</td>
          <td>".$data['gender']."</td>
          <td>".$data['hobby']."</td>
          <td>".$data['country']."</td>
          <td><a href='javascript:void(0)' onclick='editData(".$data['id'].")'>Edit</a></td>
          <td><a href='javascript:void(0)' onclick='deleteData(".$data['id'].")'>Delete</a></td>  
           </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}
?>
<script src="script.js"></script>