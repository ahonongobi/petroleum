<?php  
	require('../../dbConnect.php');
	if(!empty($_GET['id']))
	{
		$id = checkInput($_GET['id']);
	}

	if(isset($_POST['submit']))
	{
		$civility = checkInput($_POST['civility']);
		$profil = checkInput($_POST['profil']);
		$name = checkInput($_POST['name']);
		$mail = checkInput($_POST['mail']);

		$bdd = Database::connect();
		$selection = $bdd->prepare('UPDATE souscription SET solde=?, numero=?,name=?,email=? WHERE id=?');
		$selection->execute(array($civility,$profil,$name,$mail,$id));

		header('Location:index.php');
		Database::disconnect();
	}


	function checkInput($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier un utilisateur</title>
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
        		
            <img src="p3.png">  
        	</div>
        	<div class="span6">
        		
        		<h1><strong>Modifier</strong></h1><br>
	            <form class="form" role="form"  method="POST">
	                <div class="form-group">
	                    <label for="civility">Solde:</label>
	                    <input type="text" class="form-control" name="civility" id="civility" placeholder="Nom" value=" <?php echo $_GET['solde']; ?> ">
	                </div>

	                <div class="form-group">
	                    <label for="profil">numero:</label>
	                    <input type="text" class="form-control" name="profil" id="profil" placeholder="Profil" value=" <?php echo $_GET['numero']; ?> ">
	                </div>

	                <div class="form-group">
	                    <label for="name">Nom:</label>
	                    <input type="text" class="form-control"  name="name" id="name" placeholder="Nom complet" value=" <?php echo $_GET['name']; ?> ">
	                </div>

	                <div class="form-group">
	                    <label for="mail">E-mail</label>
	                    <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail" value=" <?php echo $_GET['email']; ?> ">
	                </div>

	                <br>
	                <div class="form">
	                    <button type="submit" name="submit" class="btn btn-success">Modifier</button>
	                    <a href="index.php" class="btn btn-primary"><img src="../images/long_arrow_left_26px.png"> Retour</a>
	                </div>
	            </form>
        	</div>
            

        </div>
    </div>

<script src="../js/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>