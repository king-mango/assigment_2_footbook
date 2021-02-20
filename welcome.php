<?php 


include "classes\MVC\controller.php";

$control = new controller;

if( $_SESSION['login']==FALSE){
  header('Location: http://localhost/footbook');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="inc\style.css">
    </head>
    <body>

 
       
    <div class="header">

  <a href="http://localhost/footbook" class="logo">FootBook</a>
  <div class="header-right">
    <a href="http://localhost/footbook/logout.php">Logout </a>
    <a href="http://localhost/footbook/search.php">search</a>
  </div>
</div>
<div>
 
<div id="messages">
<h2>Welcome <?php $_SESSION['user'] ?> </h2>
<h4>Make Post:</h4>
<form action="classes\MVC\controller.php?path=createmessage" method="POST">
<input type="text" name="message" id="messageBox">
<input type="submit" id="button" value="POST">
 </form>
</div>
<h2 class="fPost">Friend's Post</h2>
<?php 
$control->GetmessageForView(1);
?>





    
       
        
        <script src="inc\script.js" async defer></script>
    </body>
</html>