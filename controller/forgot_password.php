<?php
include '../src/config.php';



if(isset($_POST['forgot_password'])){ 

    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $password = $_POST['password']; 
    $question = $_POST['question']; 
    $passwordVerif = $_POST['passwordVerif'];

    if(!empty($pseudo) && !empty($password) && !empty($question) && !empty($passwordVerif))
    {

        //verify pseudo are in DB 
        $req = $connexion->prepare('SELECT *  FROM users WHERE pseudo = :pseudo AND question = :question');
        $req->execute(array(
            'pseudo' => $pseudo,
            'question' => $question));

        $connect = $req->fetch();
        if (!$connect)
        {
            echo 'Wrong Answer !';

        }else{
            //verify password
            if(password_verify($password, $connect['pass'])){

            
                echo'Your password must be different from the last one. <a href="../view/forgot_password.php"> Retry</a>';

            } else {
                 if($password === $passwordVerif){
                    $password_hash = password_hash($password, PASSWORD_DEFAULT);

                    $data = [
                        'pseudo' => $pseudo,
                        'pass' => $password_hash,
                    ];

                    $sql = "UPDATE users SET pass=:pass WHERE pseudo=:pseudo";
                    $stmt= $connexion->prepare($sql);
                    $stmt->execute($data);

                    try {
                            $stmt->execute();
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
                    echo 'Both password must be identical ! <a href="../view/forgot_password.php"> Retry</a>';
                };
            }
        }
    };
};

?>