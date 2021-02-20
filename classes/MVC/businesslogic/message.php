<?php 
require 'DB.php' ;

class message  {

 public $messageContent;
  public $author;
    public $date;
     public $id;

public function searchB($author,$date){
   $con = new DB();
           
   $conn = $con->DbConnect();


   if(isset($author) && isset($date)){
      $sql = "SELECT id, message_content ,author,time  FROM message  WHERE author = '$author' and time = '$date' ";
      $result = mysqli_query($conn, $sql);
      $conn->close(); 
      return $result;


   } 
}


   public function searchA($author){
      $con = new DB();
           
   $conn = $con->DbConnect();
      
         $sql = "SELECT id, message_content ,author, time  FROM message  WHERE author = '$author'  ";
         $result = mysqli_query($conn, $sql);
         $conn->close(); 
         return $result;
   }


   public function searchD($date){
      $con = new DB();
           
      $conn = $con->DbConnect();
     
         $sql = "SELECT id, message_content ,author, time  FROM message  WHERE time = '$date'  ";
         $result = mysqli_query($conn, $sql);
         $conn->close(); 
         return $result;
   }






     public function createNewMessage($message , $author){
        $con = new DB();
           
        $conn = $con->DbConnect();


        $sql= "INSERT INTO message (message_content , author , time) VALUES ( '$message' , '$author' , CURRENT_DATE() )";
         if($conn->query($sql)===TRUE){

            header('Location: http://localhost/footbook/welcome.php');
                
         }

         else{
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
       
         $conn->close(); 

    }




    public function GetMessages(){
        $conn = new DB();
       
        $conn =$conn->DbConnect();

        $sql = "SELECT id, message_content ,author  FROM message";
        $result = mysqli_query($conn, $sql);
        $conn->close(); 
        return $result;





    }




}












?>