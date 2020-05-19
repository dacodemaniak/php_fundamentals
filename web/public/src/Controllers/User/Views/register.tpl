{*
*	register.tpl
	Afficher le formulaire de création de compte
*}
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		
		<title>{$title}</title>
		
	</head>
	
	<body>
		<div class="container-fluid">
			<form method="post" action="/user/register" enctype="multipart/form-data">
				<fieldset>
					<legend>Qui êtes-vous ?</legend>
					
					<div class="form-group">
						<input type="text" name="firstname" id="firstname" placeholder="Votre prénom..." class="form-control">
					</div>
					
					<div class="form-group">
						<input type="text" name="lastname" id="lastname" placeholder="Votre nom..." class="form-control">
					</div>
					
					<div class="form-group">
						<input type="email" name="email" id="email" placeholder="Votre email..." class="form-control">
					</div>						
				</fieldset>
				
				<fieldset>
					<legend>Vos informations de connexion</legend>
					
					<div class="form-group">
						<input type="text" name="username" id="username" placeholder="Votre nom d'utilisateur..." class="form-control">
					</div>
					
					<div class="form-group">
						<input type="password" name="password" id="password" placeholder="Choisissez un mot de passe..." class="form-control">
					</div>		
				</fieldset>
				
				<div class="form-group">
					<button class="btn btn-success" id="register">
						Enregistrez-vous
					</button>
				</div>
			</form>
		</div>
	</body>
</html>