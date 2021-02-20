<?php 

require_once 'DB.php';

class Comments  { 



    public function addComment($comment ,$messageid ,$author){

        
        $con = new DB();

      $conn =  $con->DbConnect();


        $sql= "INSERT INTO comments (comment, message_id , author ) VALUES ('$comment', '$messageid', '$author' )";
         if($conn->query($sql)===TRUE){

            header('Location: http://localhost/footbook/welcome.php');
                
         }

         else{
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
       
         $conn->close(); 



    }


    public function getComments($message){
        $conn = new DB();
       
        $conn =$conn->DbConnect();

         $comments = array();

         if(mysqli_num_rows($message)>0){

            while($row = mysqli_fetch_assoc($message)){
                $x =$row["id"];
            
                $sql = "SELECT comment, message_id, author from comments where message_id = '$x'";
                 $result = mysqli_query($conn, $sql);

                 array_push($comments, $result);
              

            }

         }


        $conn->close(); 
        return $comments;


    }


}







?>