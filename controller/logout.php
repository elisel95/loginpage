<?php
  session_start();
 
  session_destroy();
  
  if(session_destroy())
  {
    header("Location: ../view/login.php");
  };

  setcookie('pseudo', null, time()-3600 );


  unset($_COOKIE['pseudo']);

?>