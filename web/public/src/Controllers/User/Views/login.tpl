{*
*	login.tpl
* 	Formulaire de login Smarty featured
*}

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		
		<title>{$title}</title>
		
	</head>
	
	<body>
		<div class="container-fluid">
			<form method="post" action="/user/login">
				<div class="form-group">
					<input type="text" name="username" id="username" placeholder="Votre nom d'utilisateur...">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" placeholder="Votre mot de passe...">
				</div>
				<div class="form-group">
					<button class="btn btn-primary">
						Login
					</button>
				</div>
			</form>
		</div>
	</body>
</html>