
<?php

include('db_connect.php');
if(isset($_GET['id'])){

    $id= $_GET['id'];
    delete_data($conn, $id);
 
}
// delete data query
function delete_data($conn, $id)
{
    $query="DELETE FROM `AjaxCrud` WHERE id = $id";
    $result= mysqli_query($conn,$query);
    if($result){
      echo json_encode(array("abc"=>'successfuly deleted'));
    }
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>

