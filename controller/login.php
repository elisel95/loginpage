<?php
require('../src/config.php');

if(isset($_POST['login'])){ 

    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = $_POST['password']; 

    if(!empty($pseudo) && !empty($password))
    {

        //verify pseudo are in DB 
        $req = $connexion->prepare('SELECT *  FROM users WHERE pseudo = :pseudo');
        $req->execute(array(
            'pseudo' => $pseudo));

        $connect = $req->fetch();
        if (!$connect)
        {
            echo 'Wrong pseudo !';
        }else{
            //verify password
            if(password_verify($password, $connect['pass'])){

            
                session_start();
                $_SESSION['id'] = $connect['id'];
                $_SESSION['pseudo'] = $pseudo;
                //echo 'You are connected !';

                
                if($_POST['remember'] == 'remember'){
                    $cookieDuration = 60 * 60 * 24; // 24h
                    $cookieEndOfTime = time() + $cookieDuration;
                    setcookie('pseudo', $pseudo, $cookieEndOfTime,'/','localhost');
                };

                header("Location: ../index.php?pseudo=".$_SESSION['pseudo']);
                $connexion = null;


            } else {
                echo 'Wrong password!';
            }
        }
    };
};

?>