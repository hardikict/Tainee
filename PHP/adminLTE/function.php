<?php
//    public function insert($firstName,$lastName,$email,$empPassword,$confirmPassword,$profileImage,$mobileNumber,$gender,$hobby,$country)

class employee
{
    private $conn;
    public function __construct()
    {
      
        $conn = new mysqli("localhost", "root", "admin123", "employee");
        if ($conn->connect_error) {
            die("Connection failed: ");
        } 
        // else {
        //     echo "connected oops successfully";
        // }
    }
            //Data Insertion Function
            public function insert($firstName,$lastName,$email,$empPassword,$confirmPassword,$profileImage,$mobileNumber,$gender,$hobby,$country)
            {
            $result=mysqli_query($this->conn,"INSERT INTO `emp_oops` (firstName,lastName,email,empPassword,confirmPassword,profileImage,mobileNumber,gender,hobby,country) values('$firstName','$lastName','$email','$empPassword','$confirmPassword','$profileImage','$mobileNumber','$gender','$hobby','$country')");
            // return $result;
            if($result){
                echo "true";
            }else{
                echo "false";
            }
            
            }
         
           

}
// call database
$data = new employee();

    








