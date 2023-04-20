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
    <h2>Forgot password</h2>
    <form class="px-4 py-3" method="post" action="../controller/forgot_password.php">
        <div class="container">
        <form class="px-4 py-3" method='POST' action='../controller/register.php'>
					<div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                    </div>
                    <div class="form-group">
					    <label for="question">Name of your mother ?</label>
					    <input type="text" class="form-control" id="question" name="question" placeholder="Name" required>
				    </div>
					<div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
					<div class="form-group">
                        <label for="passwordVerif">Password</label>
                        <input type="password" class="form-control" id="passwordVerif" name="passwordVerif" placeholder="Password" required>
                    </div>
					
                <br>		
            <button type="submit" class="btn btn-primary" name="forgot_password">Create a New Password</button>
        </div>
    </form>
</body>

</html>