<?php 
session_start();
include "model.php";
include "view.php";


class controller{

public function searchB($author,$name){
 
    $control = new model();

    $result =$control->searchModelB($author,$name);
   
if(empty($result)){

    echo "No Results match";
}
else{
    $view = new view();

    $view->searchView($result);
}
    

}


public function searchA($author){
 
    $control = new model();

    $result =$control->searchModelA($author);
   
  
    if(empty($result)){

        echo "No Results match";
    }
    else{
        $view = new view();
    
        $view->searchView($result);
    }

}


public function searchD($date){
 
    $control = new model();

    $result =$control->searchModelD($date);

  
    if(empty($result)){

        echo "No Results match";
    }
    else{
        $view = new view();
    
        $view->searchView($result);
    }

}



public function TomodelCreateMessage($message , $author){

    $control = new model();

    $control->tomessage($message , $author);





}


public function GetmessageForView($u){

    $control = new model();
     
    
   $toView = $control->receiveMessage();
   $toViewComments = $control->receiveComments($toView);
   $x = $control->receiveMessage();

   if($u ==1){
    $view = new view();

    $view->RenderView($x,$toViewComments);

   }

   else{

    $view = new view();

    $view->RenderViewGuest($x,$toViewComments);
   }
   

}


public function loginControl($name ,$password){

$control = new model();
$value = $control->verifyUser($name ,$password);
if($value){
    $_SESSION['x'] = NULL;

    $_SESSION['login'] = TRUE;
    $_SESSION['user'] = $name;

      header('Location: http://localhost/footbook/welcome.php');
            
}

else{
    header('Location: http://localhost/footbook.php');
    $_SESSION['x'] ="Wrong Password";

} 

}



public function toModelcreateComment($comment ,$messageid ,$author){

    $control = new model();

    $control->toComment($comment ,$messageid ,$author);



}




}

if(isset($_REQUEST["path"])){

   

    if ($_REQUEST["path"] == "createmessage"){
        $obj = new controller();
         $message = $_POST["message"];
         $author =$_SESSION['user'];
         
        $obj->TomodelCreateMessage($message , $author);
    }
    
    else if($_REQUEST["path"] =="login"){
    $obj =new controller();
    $x= $_POST["name"];
    $y=$_POST["password"];
    
    if(isset($x)  && isset($y)){
      $obj->loginControl($x,$y);
    
    }
    
    else{
        echo "sorrhy";
    }
    
    
     
    
    
    }
    
    else if($_REQUEST['path']=="comment"){

        $obj =new controller();
          
        if(isset($_REQUEST['messageid'])  && isset($_POST['comment'])&& isset($_SESSION['user'])){
          $obj->toModelcreateComment( $_POST['comment'],$_REQUEST['messageid'] ,$_SESSION['user']);
        
        }
        else{
            echo "Error Making Comment";
        }

         
    } 
    else if($_REQUEST['path']=="search"){

        $obj =new controller();
         
        if(isset($_POST['searchA']) && isset($_POST['searchD'])){

            $obj->searchB($_POST['searchA'],$_POST['searchD']);
        }
         
    }
    
    else if($_REQUEST['path']=="searchA"){
        $obj =new controller();
        if(isset($_POST['searchA'])){
            $obj->searchA($_POST['searchA']);

        }
        
    }
    
    elseif($_REQUEST['path']=="searchD"){
        $obj =new controller();
        if(isset($_POST['searchD']))
        $obj->searchD($_POST['searchD']);
    }
    


}





?>


