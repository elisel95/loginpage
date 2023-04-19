<?php
define('USER',"root");
define('PASSWD',"");
define('SERVER',"localhost");
define('BDD',"app");

$dsn="mysql:dbname=".BDD.";host=".SERVER;
    try{
      $connexion=new PDO($dsn,USER,PASSWD);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      };
    

?>