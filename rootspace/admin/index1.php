<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administration page</title>
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/correct.css">
    <style type="text/css">
    	body
    	{
    		background-color: #c0c0c0;
    	}
    </style>
</head>
<body>
	<div class="container admin">
		<div class="row">
			<h2><strong>Liste des sous categories </strong> <a href="insert.php" class="btn btn-success btn-lg"><img src="../images/plus_math_24px.png">Ajouter</a></h2>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Description</th>
						<th>Prix</th>
						<th>Catégories</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php  
						require('dbConnect.php');
						$bdd = Database::connect();
						$selection = $bdd->prepare('SELECT * FROM register ');
						while($infos = $selection->fetch())
						{
							echo '<tr>';
							echo 	'<td>'.$infos['civility'].'</td>';
							echo 	'<td>'.$infos['profil'].'</td>';
							echo 	'<td>'.$infos['name'].'</td>';
							echo 	'<td>'.$infos['mail'].'</td>';
							echo 	'<td width="300">';
							echo 		'<a class="btn btn-default" href="view.php?id='.$infos['id'].'"><img src="../images/visible_26px.png" width="15"> Voir</a>';

							echo 		'<a class="btn btn-primary" href="update.php?id='.$infos['id'].'" ><img src="../images/edit_property_26px.png" width="15"> Modifier</a>';

							echo 		'<a href="delete.php?id='.$infos['id'].'" class="btn btn-danger"><img src="../images/delete_sign_26px.png" width="15"> Supprimer</a>';

							echo 	'</td>';
							echo '</tr>';

							Database::disconnect();
						}
					?>
					
				</tbody>
			</table>
		</div>
	</div>


<script src="../js/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>