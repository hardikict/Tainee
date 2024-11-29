<?php

class employee
{

    private $conn;
    public function __construct()
    {

        $this->conn = new mysqli("localhost", "root", "admin123", "employee");
        if ($this->conn->connect_error) {
            die("Connection failed: ");
        }
        // else {
        //     echo "connected oops successfully";
        // }
    }

    //Data Insertion Function
    public function insert($firstName, $lastName, $email, $empPassword, $confirmPassword, $profileImage, $mobileNumber, $gender, $hobby, $country)
    {
        // if($this->conn){
        //     echo "<script>alert('yes')</script>";
        // }else{
        //     echo "<script>alert('No')</script>";
        // }
        $result = mysqli_query($this->conn, "INSERT INTO `emp_oops`(firstName,lastName,email,empPassword,confirmPassword,profileImage,mobileNumber,gender,hobby,country) VALUES
        ('$firstName','$lastName','$email','$empPassword','$confirmPassword','$profileImage','$mobileNumber','$gender','$hobby','$country')");
        return $result;
    }

    // Fetch Data Function
    public function fetchdata()
    {
        $fetch = mysqli_query($this->conn, "SELECT * FROM `emp_oops` ");
        return $fetch;
    }
    // GET Data use of Updation
    public function fetchrecord($id)
    {
        $resulrecord = mysqli_query($this->conn, "SELECT * FROM `emp_oops` WHERE id = '$id'");
        return $resulrecord;
    }

    // Data Updation  function
    public function updateData($firstName, $lastName, $email, $empPassword, $confirmPassword, $profileImage, $mobileNumber, $gender, $hobby, $country, $id)
    {
        $upd = mysqli_query($this->conn, "UPDATE `emp_oops` SET `firstName`='$firstName',`lastName`='$lastName',`email`='$email',`empPassword`='$empPassword',`confirmPassword`='$confirmPassword',`profileImage`= '$profileImage' ,`mobileNumber`= '$mobileNumber',`gender`= '$gender',`hobby`= '$hobby',`country`= '$country' WHERE id = '$id'");
        return $upd;
    }

    // Delete Data Function
    public function deleteData($id)
    {
        $deleteRecord= mysqli_query($this->conn, "DELETE FROM `emp_oops` WHERE id = '$id'");
        return $deleteRecord;
    }
    
}
// call database
// $data = new employee();

class upload{
    public $src = "upload/";
    public $tmp;
    public $filename;
    public $type;
    public $uploadfile;

    public function startupload(){
        $this -> filename = $_FILES["profileImage"]["name"];
        $this -> tmp = $_FILES["profileImage"]["tmp_name"];
        $this -> uploadfile = $this -> src . basename($this -> filename);
    }
    public function uploadfile(){
       
            if(move_uploaded_file($this -> tmp, $this -> uploadfile)){
            return true;
        }
    }


}