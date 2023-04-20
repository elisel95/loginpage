<?php
session_start();

  if(!isset($_SESSION["pseudo"])){
   

	if (isset($_COOKIE['pseudo'])) {
		$pseudo = $_COOKIE['pseudo'];
	}else{
		header("Location: view/login.php");   		 
	}

	  
  }else{
	$pseudo = $_SESSION['pseudo'];
  };
  
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
	<meta name="viewport" content="width-device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>Connexion</title>
	<!-- BOOTSTRAP -->
	<!-- Font Awesome -->
	<link
	  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	  rel="stylesheet"
	/>
	<!-- Google Fonts -->
	<link
	  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
	  rel="stylesheet"
	/>
	<!-- MDB -->
	<link
	  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
	  rel="stylesheet"
	/>
  </head>
  <body>
	<div id="container" style="margin: 5% 34% 0 34%;">
		<div class="sucess">
			<h1>Bienvenue <?php echo $pseudo; ?>!</h1>
			<p>C'est votre tableau de bord.</p>
			<a href="controller/logout.php">Déconnexion</a>
		</div>
	</div>
  </body>
</html>
