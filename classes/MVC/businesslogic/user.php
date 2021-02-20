<?php 

include_once 'DB.php' ;

 class users  {

    public function verifyUser($name,$password){
       
        $con = new DB();
           
        $conn = $con->DbConnect();


        $sql = "SELECT COUNT(*) AS `total` FROM  `users` WHERE name= '$name' and password = '$password' ";
        $result = mysqli_query($conn, $sql);
        $data =mysqli_fetch_assoc($result);
             $x = $data['total'];
          return $x;
        

        



    }





}  




?>
