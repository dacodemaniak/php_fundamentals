<?php
/**
* @name signoff.php
* @author Adrar - Apr. 2020
* @version 1.0.0
*  Processus de déconnexion utilisateur
*/
if (!array_key_exists("id", $_SESSION)) {
    header("Location: ./../index.php");
}

if ($_POST) {
    unset($_SESSION["id"]);
    header("Location: ./../index.php");
}
?>
<form method="post">
	<button name="signoff">
		Déconnexion
	</button>
</form>