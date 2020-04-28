<?php
/**
* @name user.view
* @author Adrar - Apr. 2020
* @version 1.0.0
*/
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Utilisateur</title>
	</head>
	
	<body>
		<h1>Détails utilisateur</h1>
		
		<?php
		echo "<ul>\n";
		foreach ($singleUser as $value) {
		    echo "\t<li>" . $value . "</li>\n";
		}
		echo "</ul>\n";
		?>
		
		<a href="<?php echo $_SERVER["PHP_SELF"]; ?>" title="Retour à la liste des utilisateurs">
			Retour
		</a>
	</body>
</html>