<?php
	require('database.php'); 
	if(isset($_POST['submit'])){
         
			$bdd = Database::connect();
            $insertion = $bdd->prepare('UPDATE postadmin SET receiver=?,subject=?,message=? WHERE id=?');
            $result = $insertion->execute(array(
            	$receiver = $_POST['receiver'],
            	$subject=$_POST['subject'],
            	$message= $_POST['message'],
            	
            	$id = $_GET['id']));
            
            header('Location:postMessage.php');
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
					<div>
						<label for="">A</label>
						<input type="text" attachment="receiver" class="form-control" required>
					</div>

					<div>
						<label for="subject">Sujet</label>
						<input type="text" attachment="subject" class="form-control" required>
					</div>

					<div>
						<label for="Message">Message</label>
						<textarea class="form-control" attachment="message" required></textarea>
					</div>

					<div class="form-group">
						<div class="btn btn-default btn-file">
							<img src="../images/attach_filled_50px.png" width="15px">Pièce
						 	<input type="file" attachment="attachment" >
						</div>
					</div>

					<div>
						<button attachment="submit" class="btn btn-success">Envoyer message </button>
						<p style="float: right; margin-right: 55%; color:#e06012;"><span><?php echo $message; ?></span></p>
					</div>
				</form>
			</div>
		</div>
	</div>





	<div class="container" id="inbox">
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
						<li id="clickInbox1"><img src="../images/inbox_50px.png" width="20"> Inbox</li>
						<li id="clickSend1"><img src="../images/mail_50px.png" width="20"> Envoyer un poste </li>
						<li id="clickDraft1"><img src="../images/create_new_32px.png" width="20"> Drafts</li>
						<li id="clickTrash1"><img src="../images/trash_26px.png" width="20"> Trash</li>
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

				<div class="table table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">A </th>
								<th scope="col">Sujet  </th>
								<th scope="col">Message  </th>
								<th scope="col">Pièce jointe  </th>
							</tr>
						</thead>
						<tbody>
						<?php  
							$bdd = Database::connect();
							$selection = $bdd->query('SELECT * FROM postadmin');
							while($infos = $selection->fetch())
							{?>
							<tr>
								<td><?php echo $infos['receiver'] ?></td>
								<td><?php echo $infos['subject'] ?></td>
								<td><?php echo $infos['message'] ?></td>
								<td><a href="<?php echo 'document/'.$infos['attachment']; ?>"><img src="../images/download_32px.png">Download</a></td>
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




	<div class="container" id="draft">
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
						<li id="clickInbox2"><img src="../images/inbox_50px.png" width="20"> Inbox</li>
						<li id="clickSend2"><img src="../images/mail_50px.png" width="20"> Envoyer un poste </li>
						<li id="clickDraft2"><img src="../images/create_new_32px.png" width="20"> Drafts</li>
						<li id="clickTrash2"><img src="../images/trash_26px.png" width="20"> Trash</li>
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
					<div>
						<label for="">A</label>
						<input type="text" name="receiver" class="form-control" value=" <?php echo $_GET['receiver']; ?> " required>
					</div>

					<div>
						<label for="subject">Sujet:</label>
						<input type="text" name="subject" class="form-control" value=" <?php echo $_GET['subject']; ?> " required>
					</div>

					<div>
						<label for="Message">Message</label>
						<textarea class="form-control" name="message" value="  " required><?php echo $_GET['message']; ?></textarea>
					</div>

					

					<div>
						<a href="postMessage.php" class="btn btn-primary"><img src="../images/long_arrow_left_26px.png"> Retour</a>
						<button name="submit" class="btn btn-success">Modifier</button>

                       
						<button  class="btn btn-success"> <a href="updateatachment.php?id=<?= $_GET['id']  ?> ">Modifier le fichier</a> </button>
						

						

					</div>
				</form>
				
			</div>
		</div>
	</div>
     

    

	<div class="container" id="trash">
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
						<li id="clickInbox3"><img src="../images/inbox_50px.png" width="20"> Inbox</li>
						<li id="clickSend3"><img src="../images/mail_50px.png" width="20"> Envoyer un poste </li>
						<li id="clickDraft3"><img src="../images/create_new_32px.png" width="20"> Drafts</li>
						<li id="clickTrash3"><img src="../images/trash_26px.png" width="20"> Trash</li>
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

				<div>
					Je suis trash
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="../js/jquery-latest.js"></script>
<script>
	$(document).ready(function(){
            $('#inbox').hide();
            $('#send').hide();
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

$(document).ready(function(){
            $('#update').hide();
            
	});
$(function(){
			$('#updatefile').click(function(){
					$('#update').show();
					
			});
	});	



	


	

</script>
</body>
</html>
