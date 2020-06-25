<?php  
session_start();
	require('../../dbConnect.php');
	if(!empty($_GET['id']))
	{
		$id = checkInput($_GET['id']);
	}

	$bdd = Database::connect();
	$selection = $bdd->prepare('SELECT * FROM souscription WHERE id =? ');
	$selection->execute(array($id));

	$results = $selection->fetch();

	Database::disconnect();


	function checkInput($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Voir un client</title>
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
			<div class="span6">
				<h1><strong>Voir les clients</strong></h1><br>
				<form>
					<div class="form-group">
						<label><strong>Civilité:</strong><?php echo ' '.$results['genre'] ?></label>
					</div>

					<div class="form-group">
						<label><strong>Name:</strong><?php echo ' '.$results['name'] ?></label>
					</div>

					<div class="form-group">
						<label><strong>Numero:</strong><?php echo ' '.$results['numero'] ?></label>
					</div>

					<div class="form-group">
						<label><strong>E-mail:</strong><?php echo ' '.$results['email'] ?></label>
					</div>

				</form>
				<div class="form">
					<a href="index.php" class="btn btn-primary"><img src="../images/long_arrow_left_26px.png"> Retour</a>
				</div>
				
			</div>
                 <?php 
                    $bdd = Database::connect();
    $selection = $bdd->query("SELECT * FROM souscription WHERE  id=$_GET[id] ");
    $results = $selection->fetch();

                  ?>
			<div class="span6">
                <div>
                	<img height="200" width="200" style="border-radius: 50%;"  src="<?php echo '../../document/'.$results['photo']; ?> "/>
                </div>
            </div>

		</div>
	</div>

<script src="../js/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>