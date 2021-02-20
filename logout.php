<?php 

session_start();
unset($_SESSION['x']);
unset($_SESSION['login']);
unset($_SESSION['user'] );
 

header('Location: http://localhost/footbook');



?>