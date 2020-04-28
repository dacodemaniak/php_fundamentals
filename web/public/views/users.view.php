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
		<title>Liste des utilisateurs</title>
	</head>
	
	<body>
		<table class="table table-condensed">
			<thead>
				<tr>
					<th>Utilisateur</th>
				</tr>
			</thead>
			
			<tbody>
				<?php for($i=0; $i < count($users); $i++) {?>
					<tr>
						<td>
							<a href="<?php echo $_SERVER["PHP_SELF"]?>?id=<?php echo $i;?>" title="Voir le détail">
								<?php echo $users[$i] . " [" . $_SERVER["PHP_SELF"] . "?" . $i . "]";?>
							</a>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</body>
</html>