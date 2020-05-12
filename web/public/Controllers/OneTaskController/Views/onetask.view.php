<?php
/**
* @name onetask.view
* @author Adrar - May 2020
* @version 1.0.0
*   Display one task from OneTaskController
*/
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
		
		<title><?php echo $datas->modelData["libelle"];?></title>
		
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h1><?php echo $datas->modelData["libelle"];?></h1>
				</div>
				
				<div class="card-body">
					<p><span class="label">Du : </span><?php echo $datas->modelData["dateDebut"]; ?></p>
					<p><span class="label">Au : </span><?php echo $datas->modelData["dateFin"]; ?></p>
					
					<blockquote>
						<span class="label">Catégorie : </span><?php echo $datas->modelData["categorie"]; ?>
					</blockquote>
				</div>
				
				<div class="card-footer">
					<a href="?controller=Task">Retour à la liste</a>
				</div>
			</div>
		</div>
	</body>
</html>