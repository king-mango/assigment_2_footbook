<?php 

class DB {


 private $servername = "localhost";
    private $username = "root";
    private $password = "";
   private  $dbname = "footbook";
    public $conn ;

   






public function DbConnect(){
 
    // Create connection
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    else{
        
        return $conn;
        
    }



}









}




?>