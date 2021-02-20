<?php 


include "classes\MVC\controller.php";

$control = new controller;


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

  <a href="" class="logo">FootBook</a>
  <div class="header-right">
    <a href="http://localhost/footbook">Login </a>
    <a href="http://localhost/footbook/search.php">search</a>
  </div>
</div>
<div>
<h2 id="wellogin">Post from other users</h2>

<?php 
$control->GetmessageForView(2);
?>





    
       
        
        <script src="inc\script.js" async defer></script>
    </body>
</html>