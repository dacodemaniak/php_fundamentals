<?php
/**
* @name task.view
* @author Adrar - May 2020
* @version 1.0.0
*   Présentation de la liste des tâches
*/
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
		
		<title>Liste des tâches</title>
		
	</head>
	
	<body>
		<div class="container-fluid">
			<ul>
				<?php 
				for ($indice = 0; $indice < count($datas->modelData); $indice++) {?>
					<li>
						<a href="<?php echo "?controller=Task&method=byId&id=" . $datas->modelData[$indice]["id"]; ?>" title="Détail">
							<?php echo $datas->modelData[$indice]["libelle"]; ?>
						</a>
						<span>Créée le :</span><?php echo $datas->modelData[$indice]["dateCreation"];?>
					</li>
				<?php }?>
			</ul>
		</div>
	</body>
</html>