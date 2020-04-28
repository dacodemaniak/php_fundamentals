<?php
/**
* @name user.view
* @author Adrar - Apr. 2020
* @version 1.0.0
* Response processing
*/
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Liste des utilisateurs</title>
	</head>
	
	<body>
		<?php echo "Nom : " . $oUser->lastname; ?>
		
		<table class="table table-condensed">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Nickname</th>
				</tr>
			</thead>
			
			<tbody>
				<!-- Affiche l'objet $oUser -->
				
				<?php 
				$i = 0;
				foreach($oUsers as $user) {?>
					<tr>
						<td>
							<?php echo $user->getName(); ?>
						</td>
						<td>
							<a href="<?php echo $_SERVER["PHP_SELF"]?>?id=<?php echo $i;?>" title="Voir le détail">
								<?php echo $user->username; ?>
							</a>
						</td>
					</tr>
				<?php 
				    $i++; 
				}
				?>
			</tbody>
		</table>
	</body>
</html>