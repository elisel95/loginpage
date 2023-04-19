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
		<div class="">
			<form class="px-4 py-3" method='POST' action='../controller/register.php'>
            <div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
				</div>
				<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required>
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
				<button type="submit" name="register" class="btn btn-primary">Sign in</button>
			</form>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="../index.php">Already have an account ?</a>
			<a class="dropdown-item" href="#">Forgot password?</a>
		</div>
	</div>
  </body>
</html>
