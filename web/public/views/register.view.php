<?php
/**
* @name register.view.php
* @author Adrar - Apr. 2020
* @version 1.0.0
**/
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
	</head>
	
	<body>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
			<div class="form-group">
				<label for="lastname">
					Votre nom : (*)
				</label>
				<input class="form-control" type="text" name="lastname" id="name" value="<?php echo $fields["lastname"]["value"]; ?>">
			</div>
			<div class="field-error">
				<?php 
				if (array_key_exists("error", $fields["lastname"])) {
				    echo $fields["lastname"]["error"];
				}
				?>
			</div>
			
			<div class="form-group">
				<label for="firstname">
					Votre prénom :
				</label>
				<input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $fields["firstname"]["value"]; ?>">
			</div>
			
			<fieldset>
    			<div class="form-group">
    				<label for="email">
    					Votre email : (*)
    				</label>
    				<input class="form-control" type="text" name="email" id="email" value="<?php echo $fields["email"]["value"]; ?>">
    			</div>
    			<div class="field-error">
    				<?php 
    				if (array_key_exists("error", $fields["email"])) {
    				    echo $fields["email"]["error"];
    				}
    				?>
    			</div>
    			<div class="form-group">
    				<label for="email_confirm">
    					Confirmation : (*)
    				</label>
    				<input class="form-control" type="text" name="email_confirm" id="email_confirm" value="<?php echo $fields["email_confirm"]["value"]; ?>">
    			</div>
    			<div class="field-error">
    				<?php 
    				if (array_key_exists("error", $fields["email_confirm"])) {
    				    echo $fields["email_confirm"]["error"];
    				}
    				?>
    			</div>
			</fieldset>
			
			<div class="form-group">
				<label for="username">
					Nom d'utilisateur : (*)
				</label>
				<input class="form-control" type="text" name="username" id="username" value="<?php echo $fields["username"]["value"]; ?>">
			</div>
    		<div class="field-error">
    			<?php 
    			if (array_key_exists("error", $fields["username"])) {
    				   echo $fields["username"]["error"];
    			}
    			?>
    		</div>
			<fieldset>
    			<div class="form-group">
    				<label for="password">
    					Votre mot de passe : (*)
    				</label>
    				<input class="form-control" type="password" name="password" id="password" value="<?php echo $fields["password"]["value"]; ?>">
    			</div>
        		<div class="field-error">
        			<?php 
        			if (array_key_exists("error", $fields["password"])) {
        				   echo $fields["password"]["error"];
        			}
        			?>
        		</div>
    			<div class="form-group">
    				<label for="password_confirm">
    					Confirmation : (*)
    				</label>
    				<input class="form-control" type="password" name="password_confirm" id="password_confirm" value="<?php echo $fields["password_confirm"]["value"]; ?>">
    			</div>
        		<div class="field-error">
        			<?php 
        			if (array_key_exists("error", $fields["password_confirm"])) {
        				   echo $fields["password_confirm"]["error"];
        			}
        			?>
        		</div>
			</fieldset>
			
			<div class="form-group">
				<button class="btn btn-success">
					S'inscrire
				</button>
			</div>
		</form>
	</body>
</html>