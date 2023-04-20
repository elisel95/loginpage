<?php
  session_start();
 
  session_destroy();
  
  setcookie('pseudo', null, time()-3600 );

  unset($_COOKIE['pseudo']);

  header("Location: ../view/login.php");

?>