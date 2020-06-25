<?php session_start();
 require('../../dbConnect.php');
 $bdd = Database::connect();
    $selection = $bdd->query("SELECT * FROM souscription WHERE  id=$_SESSION[id] ");
    $results = $selection->fetch();

 if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
    { 
        //donner taille max du fichier
        $tailleMax = 10097152; 
        // definir les extensions autorisées 
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        
        // Testons si le fichier n'est pas trop gros (sa taille)
        if($_FILES['avatar']['size'] <= $tailleMax)
        {
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
            //Verifier si l'entexsion est dans le tableau
            if(in_array($extensionUpload, $extensionsValides))
            {
                //creer chemin pour le fichier
                $chemin = "../images/photonumero/".$_SESSION['id'].".".$extensionUpload;
                // On peut valider le fichier et le stocker définitivement
                $resultat =  move_uploaded_file($_FILES['avatar']['tmp_name'],  $chemin);
                if($resultat)
                {
                    $bdd = Database::connect();
                    $updateavatar = $bdd->prepare('UPDATE souscription SET avatar = :avatar WHERE id = :id');
                    $updateavatar->execute(array(
                        'avatar' => $_SESSION['id'].".".$extensionUpload,
                        'id' => $_SESSION['id']
                    ));
                    header('location:index.php?id=' .$_SESSION['id']);
                }
                else
                {
                    echo "Erreur durant l'importation de votre photo de numero";
                }
            }
            else
            {
                echo 'votre photo de numero doit etre au format jpg, jpeg, gif ou png';
            }
        }
        else
        {
            echo 'votre photo de numero ne doit pas depasser 10Mo';
        }
    }
    Database::disconnect();




 ?>

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administration page</title>
    <!-- responsive -->
    <meta charset="UTF-8">
    <title>Administration page</title>
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="gobi.css">
    
    <style type="text/css">
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
    	
    	.dashboard{
          
  height: 10px;
  margin-bottom: 0;
  position: relative;
  top: 6px;
    	}
    </style>
</head>
<body>  

	<div style="margin-top: 30px;" class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div style="margin-left: 40%;" class="market-update-block clr-block-1">
					<?php 
                            $bdd = Database::connect();
						    $selectall = $bdd->query("SELECT count(id) as total FROM souscription");
						    $selresults = $selectall->fetch();
                   
					 ?>
					<div  class="col-md-8 market-update-left">
						<h3>Clients</h3>
						<h4><?= $selresults['total'] ?></h4>
						<p>Utilisateur enregistrés.</p>
						<a href="#" data-toggle="modal" data-target="#myModal8"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>3 Derniers utilisateurs</h3>
					<h4>23</h4>............</p>
					<a href="#" data-toggle="modal" data-target="#myModal8"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<?php 
               
			 ?>
			<div class="col-md-4 market-update-gd">
				<div style="margin-right: 40%;" class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<img height="56" width="56" style="border-radius: 50%;"  src="<?php echo '../images/photonumero/'.$results['avatar']; ?> "/> <button id="buttonnumero">changer</button>						
						<h4><span>admin: </span><?php echo $_SESSION['name']; ?></h4>
						<p><span>Email: </span><?php echo $_SESSION['mail']; ?></p>
						
						<a href="#" data-toggle="modal" data-target="#myModal8"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
	<div style="margin-right: 5%;margin-left: 5%;" class="container-fluid admin">
		<div class="row">
			<h2><strong>Espace d'administration</strong> <a href="insert.php" class="btn btn-success btn-lg"><img src="../images/plus_math_24px.png">Ajouter</a>
			<div style="float: right; margin-top: 10px;">
				<a  href="postMessage.php" class="btn btn-success btn-lg"><img src="../images/telegram_app_24px.png">Inbox un client</a>
			</div></h2>

			

			<table style="margin-top: 20px; width: 100%;" class="table table-hover table-responsive dashboard">
				<thead>
					<tr>
						<th>Civilité</th>
						<th>Numero</th>
						<th>Nom</th>
						<th>E-mail</th>
						<th>Nationalité</th>
                        <th>Profession</th>
                        <th>Revenus mensuel</th>
                        <th>Prêt demander</th>
                        <th>Code valid</th>
                        <th>solde</th>
                        <th>Action</th>
                        <th>Message</th>

					</tr>
				</thead>
				<tbody>
					<?php  
						
						$bdd = Database::connect();
						$selection = $bdd->query('SELECT * FROM souscription');
						while($infos = $selection->fetch())
						{?>
						  	 <tr>
							 	<td> <?php echo $infos['genre'] ?></td>
							 	<td> <?php echo $infos['numero'] ?></td>
                                <td> <?php echo $infos['name'] ?></td>
							 	<td> <?php echo $infos['email'] ?></td>
							 	<td> <?php echo $infos['nationalite'] ?></td>
                                <td> <?php echo $infos['profession'] ?></td>
                                <td> <?php echo $infos['revenusmenusel'] ?></td>
                                <td> <?php echo $infos['montantpret'] ?></td>
                                <td> <?php echo $infos['codevalid'] ?></td>
                                <td> <?php echo $infos['solde'] ?></td>
							 	<td width="300">
							 		<a class="btn btn-default" href="view.php?id=<?php echo $infos['id'] ?>&photo=<?php echo $infos['photo']; ?> "><img src="../images/visible_26px.png" width="15"> Voir</a>

								<a class="btn btn-primary" href="update.php?id=<?php echo $infos['id']; ?>&solde=<?php echo $infos['solde']; ?>&numero=<?php echo $infos['numero']; ?>&name=<?php echo $infos['name']; ?>&email=<?php echo $infos['email']; ?>" ><img src="../images/edit_property_26px.png" width="15"> Modifier</a>

									<a onclick="return confirm('Etes vous sure ?')" href="delete.php?id=<?php echo $infos['id'] ?>" class="btn btn-danger"><img src="../images/delete_sign_26px.png" width="15"> Supprimer</a>


								</td>
                                <td><a  href="postMessage.php?id=<?php echo $infos['id'] ?>" class="btn btn-primary"><img src="../images/delete_sign_26px.png" width="15">message</a></td>
							</tr>
					<?php
					}
							Database::disconnect();
						
					?>
					
				</tbody>
			</table>

		</div>
	</div>
         <center>
	    <form action="" method="post" enctype="multipart/form-data">
        <br>
        <div class="btn btn-default btn-file">
        <img src="../images/attach_filled_50px.png" width="15px"><label>Modifier numero</label>
        <input type="file" name="avatar" id="avatar">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Envoyer">
         
    </form>
      </center>




<script src="../js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script>
	
	


	$(document).ready(function(){
            $('form').hide();
            
	});
	$(function(){
         $('#buttonnumero').click(function(){
                    $('form').show();
         });

	});

	
	</script>

<script type="text/javascript">
    window.onload = function()
    {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword()
    {
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;

        if(password2 != password1)
        {
            document.getElementById("password2").setCustomValidity("Mot de passe non identique");
        }
        else
        {
            document.getElementById("password2").setCustomValidity("");
        }
    }
</script>
</body>
</html>