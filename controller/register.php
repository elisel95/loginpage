<?php
require('../src/config.php');

if(isset($_POST['register'])){ 

    $pseudo = $_POST['pseudo']; 
    $password = $_POST['password'];
    $mail = $_POST['email']; 
    $passwordVerif = $_POST['passwordVerif'];

    if(!empty($pseudo) && !empty($password) && !empty($mail) && !empty($passwordVerif))
    {

        
        //verify email are not already in DB 
        $req = $connexion->prepare('SELECT *  FROM users WHERE mail = :mail');
        $req->execute(array(
            'mail' => $mail));

        $connect = $req->fetch();

        if (!$connect)
        {

            //Verify password // mail and speudo format

            if(preg_match("/^[a-zA-Z._-]*$/",$pseudo) && filter_var($mail, FILTER_VALIDATE_EMAIL)){

                if($password === $passwordVerif){
                    $password_hash = password_hash($password, PASSWORD_DEFAULT);

                    $insertion = $connexion->prepare('INSERT INTO users (pseudo, mail, pass) VALUES(:pseudo,:mail, :pass)');
                    $insertion->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
                    $insertion->bindValue('mail', $mail, PDO::PARAM_STR);
                    $insertion->bindValue('pass', $password_hash, PDO::PARAM_STR);
                    try {
                            $insertion->execute();
                        }
                    catch (PDOException $e)
                        {
                        echo 'Error : ' . $e->getMessage();
                        die();
                        }
                    $connexion = null;

                    //message success
                    $message = "Successfull ! <a href='../index.php' alt='login page'> Please Log IN !</a>";
                    echo $message;
                }else{
                    echo 'Both password must be identical !';
                };
            }else{
                echo 'Your pseudo or mail are using illegal character. <a href="../view/register.php">Please retry</a>';
            }
        }else{
        echo 'There is already an account with this email adress ! <a href="../index.php" alt="login page"> Please Log IN !</a>' ;
        };

    } else {
        echo 'Please fill in all fields';
    };
};

?>