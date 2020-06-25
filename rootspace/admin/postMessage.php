<?php
    
    session_start();
	require('../../dbConnect.php'); 

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur 
    
	$messages = " ";
	$img = '<img src="../images/checkmark_24px.png">';
    $userid = $_GET['id'];
	if(isset($_POST['submit']))
	{  
		
		$receiver = checkInput($_POST['receiver']);
		
		$message = checkInput($_POST['message']);
		
     
            
			$bdd = Database::connect();
            $insertion = $bdd->prepare('INSERT INTO inbox (userid,suejet,message,dateenvoi) VALUES(?,?,?,NOW())');
            $result = $insertion->execute(array($userid,$receiver,$message));
            
            if($result)
            {
            	$messages= "Message bien envoyé!".$img;
            }
            else {
            	$message = "Message non envoyé";
            }

	}



	function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    Database::disconnect();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Poste message</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Lobster+Two:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> 
<!-- //web font -->
	<style>
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
		.liste ul li a
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
			cursor: pointer;
		}
		.liste ul li:hover
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

			h1 {
    font-size: 3em;
    text-align: center;
    color: #ffeb3b;
    font-weight: 100;
    font-family: 'Lobster Two', cursive;
    letter-spacing: 3px;
}
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #7ed321;
  color: #fff;
}

	</style>
</head>
<body>
	 <div>
      <div style="margin-bottom: 30px;">

      </div>
     
	 </div>
<div class="container" id="send">
		<div class="row">

			<div class="col-md-4 ajout">

				<div class="container coller">
					<div class="row">
						<?php 
                        $bdd = Database::connect();
    $selection = $bdd->query("SELECT * FROM souscription WHERE  id=$_SESSION[id] ");
    $results = $selection->fetch();

						 ?>
						<div class="profil col-md-4">
							<img height="56" width="56" style="border-radius: 50%;"  src="<?php echo '../images/photoProfil/'.$results['avatar']; ?> "/> 
						</div>

						<div class="col-md-8 ajout">
							<h1><?= $results['name'] ?></h1>
							<p><?= $results['email'] ?></p>
						</div>
					</div>
				</div>

				<div class="liste">
					<ul>
						<li id="clickInbox"><img src="../images/inbox_50px.png" width="20"> Inbox</li>
						<li id="clickSend"><img src="../images/mail_50px.png" width="20"> Envoyer un poste </li>
						
					</ul>
				</div>

			</div>

			<div class="col-md-8 card">
				
				<div class="card-header info-color white-text text-center py-4 couleur">
					<h1>Envoyer un message</h1>
				</div><br>

				<div class="alert alert-info">
					<h4>Vous pouvez écrire directement a un client ici</h4>
				</div>

				<form class="form-group thumbnail" action=""  method="POST" enctype="multipart/form-data">
					<div>
						<label for="receiver">Sujet</label>
						<input type="text" name="receiver" class="form-control" required>
					</div>

					<div>
						<!--<label for="subject">Sujet</label>
						<input type="text" name="subject" class="form-control" required>
                               M pour les cash Chrono
                               F pour les Proffessionnele
						 -->

						
					</div>

					<div>
						<label for="Message">Message</label>
						<textarea class="form-control" name="message" required></textarea>
					</div>
                   
					

					<div>
						<button type="submit" name="submit" class="btn btn-success">Envoyer message </button>
						<p style="float: right; margin-right: 55%; color:#e06012;"><span><?php echo $messages; ?></span></p>
					</div>
				</form>
			</div>
		</div>
	</div>





	<div class="container" id="inbox">
		<div class="row">

			<div class="col-md-4 ajout">

				<div class="container coller">
					<div class="row">
						<?php 
                        $bdd = Database::connect();
    $selection = $bdd->query("SELECT * FROM souscription WHERE  id=$_SESSION[id] ");
    $results = $selection->fetch();

						 ?>
						<div class="profil col-md-4">
							<img height="56" width="56" style="border-radius: 50%;"  src="<?php echo '../images/photoProfil/'.$results['avatar']; ?> "/>
						</div>

						<div class="col-md-8 ajout">
							<h1><?= $results['name'] ?></h1>
							<p><?= $results['email'] ?></p>
						</div>
					</div>
				</div>

				<div class="liste">
					<ul>
						<li id="clickInbox1"><img src="../images/inbox_50px.png" width="20"> Inbox</li>
						<li id="clickSend1"><img src="../images/mail_50px.png" width="20"> Envoyer un poste </li>
						
					</ul>
				</div>

			</div>

			<div class="col-md-8 card">
				
				<div class="card-header info-color white-text text-center py-4 couleur">
					<h1>Vos Postes</h1>
				</div><br>

				<div class="alert alert-info">
					<h4>Pour vous aider à bien rétrouver vos anciennes poste.</h4>
				</div>

				<div class="table table-responsive">
					<table class="table">
						<thead>
							<tr>
								
								<th scope="col">Sujet  </th>
								<th scope="col">Message  </th>
								
							</tr>
						</thead>
						<tbody>
						<?php  
							$bdd = Database::connect();
							$selection = $bdd->query('SELECT * FROM inbox');
							while($infos = $selection->fetch())
							{?>
							<tr>
								<td><?php echo $infos['suejet'] ?></td>
								
								<td><?php echo $infos['message'] ?></td>
								
							</tr>
						</tbody>
						<?php
						}
							Database::disconnect();
							
						?>
					</table>
					
				</div>
			</div>
		</div>
	</div>




	





	

 <script src="js/jquery.js"></script>
<script>
	
	


	$(document).ready(function(){
            $('#inbox').hide();
            $('#draft').hide();
            $('#trash').hide();
	});

	$(function(){
			$('#clickInbox').click(function(){
					$('#inbox').show();
					$('#send').hide();
					$('#draft').hide();
					$('#trash').hide();
			});
	});

	

	$(function(){
			$('#clickDraft').click(function(){
					$('#draft').show();
					$('#inbox').hide();
					$('#send').hide();
					$('#trash').hide();
			});
	});	


	$(function(){
			$('#clickTrash').click(function(){
					$('#trash').show();
					$('#inbox').hide();
					$('#send').hide();
					$('#draft').hide();
			});
	});


	$(function(){
			$('#clickSend').click(function(){
					$('#send').show();
					$('#inbox').hide();
					$('#draft').hide();
					$('#trash').hide();
			});
	});


	$(function(){
			$('#clickSend1').click(function(){
					$('#send').show();
					$('#inbox').hide();
					$('#draft').hide();
					$('#trash').hide();
			});
	});


	$(function(){
			$('#clickInbox1').click(function(){
					$('#inbox').show();
					$('#send').hide();
					$('#draft').hide();
					$('#trash').hide();
			});
	});


	$(function(){
			$('#clickDraft1').click(function(){
					$('#draft').show();
					$('#send').hide();
					$('#inbox').hide();
					$('#trash').hide();
			});
	});	

	$(function(){
			$('#clickTrash2').click(function(){
					$('#inbox').hide();
					$('#send').hide();
					$('#draft').hide();
					$('#trash').show();
			});
	});

	$(function(){
			$('#retour').click(function(){
					$('#inbox').show();
					$('#send').hide();
					$('#draft').hide();
					$('#trash').hide();
			});
	});
	$(function(){
			$('#retour2').click(function(){
					$('#inbox').show();
					$('#send').hide();
					$('#draft').hide();
					$('#trash').hide();
			});

	});
	





	


	

</script>




</body>
</html>