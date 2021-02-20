<?php 
session_start();
$_SESSION['user'] = "";

$_SESSION['login'] = false;





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
  <style>
  <?php include "inc\style.css" ?>
</style>



<h2 id="wellogin">Welcome to Footbook</h2>
<h3 id="wellogin">Login to continue or click on the guest button if you don't have an acccount</h3>
  <form action="classes\MVC\controller.php?path=login"  method="POST" id="login">
  <label for="name">Enter Name</label><br>
  <input class="logininput" type="text" name="name"> <br>

  <label for="password">Password</label> <br>
  <input class="logininput" type="text" name="password"> <br>
<button class="loginbtn"> login</button>
<h3 id="wellogin"> 
<?php
if(isset($_SESSION['x'])){
  echo  $_SESSION['x'];
} ?>
 </h3>
  
  </form>

<a href="http://localhost/footbook/guest.php">  <button class="guestbtn">Continue as a guest</button> </a>

 
  
    
    <script src="" async defer></script>
  </body>
</html>