<?php
/**
 * @name index.php
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 * 	Illustrate some basics of PHP
 */
session_start();

if (array_key_exists("id", $_SESSION)) {
    header("Location: home.php");
}

$error = "";

if (array_key_exists("error", $_GET)) {
    $error = "Veuillez remplir le formulaire correctement !";
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $greetings;?></title>
	</head>
	
	<body>
		<form method="post" action="signin.php">
			<label>Utilisateur :</label>
			<input type="text" name="login">
			<label>Mot de passe :</label>
			<input type="password" name="password">
			<button>
				Connexion
			</button>
			<a href="forgot_password.php">Mot de passe oublié ?</a>
			<a href="register.php">S'inscrire</a>
		</form>
		<?php 
		if (strlen($error)) {
		    echo $error;
		}
		?>
	</body>
</html>

