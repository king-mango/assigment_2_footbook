<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <style>
  <?php
   include "inc\style.css" 
   ?>
</style>

   
<div class="header">

<a href="http://localhost/footbook" class="logo">FootBook</a>
<div class="header-right">
  
  <a href="http://localhost/footbook/search.php">search</a>
</div>
</div>

<h3 id="wellogin">Search for message by entering an author and date</h3>

<form action="classes\MVC\controller.php?path=search"  method="POST" id="login">

  <label for="name">Author </label><br>
  <input class="logininput" type="text" name="searchA"> <br>
  <label for="name">Date </label><br>
  <input class="logininput" type="date" name="searchD">

<button class="loginbtn">search</button>

  
  </form>

  <h3 id="wellogin">Search for message by entering an author</h3>

  
<form action="classes\MVC\controller.php?path=searchA"  method="POST" id="login">

<label for="name">Author </label><br>
<input class="logininput" type="text" name="searchA"> <br>


<button class="loginbtn">search</button>


</form>

<h3 id="wellogin">Search for message by entering a date</h3>


<form action="classes\MVC\controller.php?path=searchD"  method="POST" id="login">

 
  <label for="name">Date </label><br>
  <input class="logininput" type="date" name="searchD">

<button class="loginbtn">search</button>

  
  </form>
        
        <script src="" async defer></script>
    </body>
</html>