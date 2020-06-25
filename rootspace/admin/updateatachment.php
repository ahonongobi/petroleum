<?php 

 session_start(); require('database.php') ;

$bdd = Database::connect();
    $selection = $bdd->query("SELECT * FROM postadmin WHERE  id='".$_GET['id']."' ");
    $results = $selection->fetch();

    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur 
    if (isset($_FILES['attachment']) AND !empty($_FILES['attachment']['name']))
    { 
        //donner taille max du fichier
        $tailleMax = 10097152; 
        // definir les extensions autorisées 
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png','pdf','txt');
        
        // Testons si le fichier n'est pas trop gros (sa taille)
        if($_FILES['attachment']['size'] <= $tailleMax)
        {
            $extensionUpload = strtolower(substr(strrchr($_FILES['attachment']['name'], '.'), 1));
            //Verifier si l'entexsion est dans le tableau
            if(in_array($extensionUpload, $extensionsValides))
            {
                //creer chemin pour le fichier
                $chemin = "document/".time().".".$extensionUpload;
                // On peut valider le fichier et le stocker définitivement
                $resultat =  move_uploaded_file($_FILES['attachment']['tmp_name'],  $chemin);
                if($resultat)
                {
                    $bdd = Database::connect();
                    $updateattachment = $bdd->prepare('UPDATE postadmin SET attachment = :attachment WHERE id = :id');
                    $updateattachment->execute(array(
                        'attachment' => time().".".$extensionUpload,
                        'id' => $_GET['id']
                    ));
                    header('location:postMessage.php?id=' .$_SESSION['id']);
                }
                else
                {
                    echo "Erreur durant l'importation de votre photo de profil";
                }
            }
            else
            {
                echo 'votre photo de profil doit etre au format jpg, jpeg, gif ou png';
            }
        }
        else
        {
            echo 'votre photo de profil ne doit pas depasser 10Mo';
        }
    }
    Database::disconnect();




?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Poste message</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.alert.alert-info
		{
			font-size: 0.9em;
			color: #fff;
			background-color:#337AB7;
		}
		.couleur
		{
			background-color: #CCC;
			margin-top: 40px;
		}
		.btn.btn-file
		{
			cursor: pointer;
			border-radius: inherit;
			position: relative;
			overflow: hidden;
		}
		.btn.btn-file>input[type="file"]
		{
			position: absolute;
			opacity: 0;
			top: 0;
			right: 0;
			outline: none;
			background-color: #fff;
			display: inline-flex;
			width: 100%;
			padding: 0.4em;
			filter: alpha(opacity=0);
		}

		.coller
		{
			background-color: #e06012;
			padding: 1em;
			box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.15);
		}
		.col-6.ajout
		{
			color: #fff;
		}
		.inbox
		{
			background-color: #CCC;

		}
		.liste ul li 
		{
			background-color: #CCC;
			display: block;
			color: #504d4c;
			text-decoration: none;
		}
		.liste ul li
		{
			background-color: #CCC;
			padding: 1em;
			display: block;
			color: #504d4c;
			text-decoration: none;
		}
		.liste ul li a:hover
		{
			background-color: #C5C5C5;
		}
		.liste ul
		{
			padding: 0em;
			list-style: none;
		}
		.col-4.ajout
		{
			margin-top: 40px;
		}
	</style>
</head>
<body>




<div class="container" id="send">
		<div class="row">

			<div class="col-4 ajout">

				<div class="container coller">
					<div class="row">
						<div class="message col-6">
							<img src="../images/photoProfil/parDefaut.png" width="100px" style="border-radius: 50%">
						</div>

						<div class="col-6 ajout">
							<p>Nom</p>
							<p>email</p>
						</div>
					</div>
				</div>

				<div class="liste">
					<ul>
						<li id="clickInbox"><img src="../images/inbox_50px.png" width="20"> Inbox</li>
						<li id="clickSend"><img src="../images/mail_50px.png" width="20"> Envoyer un poste </li>
						<li id="clickDraft"><img src="../images/create_new_32px.png" width="20"> Drafts</li>
						<li id="clickTrash"><img src="../images/trash_26px.png" width="20"> Trash</li>
					</ul>
				</div>

			</div>

			<div class="col-8 card">
				
				<div class="card-header info-color white-text text-center py-4 couleur">
					header
				</div><br>

				<div class="alert alert-info">
					Enter
				</div>

				<form class="form-group thumbnail" enctype="multipart/form-data" action="" method="POST" rows="6">
					

					<div class="form-group">
						<div class="btn btn-default btn-file">
							<img src="../images/attach_filled_50px.png" width="15px">Pièce
						 	<input type="file"  name="attachment" >
						</div>
					</div>

					<div>
						<button type="submit" class="btn btn-success">Envoyer message </button>
					
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>