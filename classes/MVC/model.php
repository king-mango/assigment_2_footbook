<?php 

include "businesslogic\message.php";
include "businesslogic\user.php";
include "businesslogic\comments.php";


class model {

  public function searchModelB($author,$date){

  $model= new message();

  $result =$model->searchB($author,$date);
  return $result;

    }

    public function searchModelA($author){

        $model= new message();
      
        $result =$model->searchA($author);
        return $result;
      
          }

          public function searchModelD($date){

            $model= new message();
          
            $result =$model->searchD($date);
            return $result;
          
              }
          
      


    public function tomessage($message , $author){
      
    $model = new message();

    $model->createNewMessage($message , $author);





    }



    public function receiveMessage(){
      
        $model = new message();
        $result =  $model->GetMessages();

        return $result;




    }


    public function receiveComments($toView){
        $model = new Comments();
        $result =  $model->getComments($toView);

        return $result;

    }

    public function toComment($comment ,$messageid ,$author){

        $model = new Comments();
         $model->addComment($comment ,$messageid ,$author);
    }


    public function verifyUser($x, $y){
       
        $model = new users();

       $result =  $model->verifyUser($x,$y);

       return $result;


    }









}




?>