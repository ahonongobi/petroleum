<?php 

 $messages= "";
 
 if ( ($_POST['name']!="") && ($_POST['email']!="")){
     
 	$messages = '
 	<h3 align="center"> Contail details</h3>
 	<table border="1" width="100%" cellpadding="5" cellspacing="5">
 	<tr>
 	<td width="30%"> Name </td>
 	<td width="70%">'.$_POST['name'].'</td>
 	</tr>
 	<tr>
 	<td width="30%">Email</td>
 	<td width="70%">'.$_POST['email'].'</td>
 	</tr>
 	<tr>
 	<td width="30%">Subject</td>
 	<td width="70%">'.$_POST['phone'].'</td>
 	</tr>
 	<tr>
 	<td width="30%">Message</td>
 	<td width="70%">'.$_POST['message'].'</td>
 	</tr>

 	</table>

 	';

 	require_once "phpmailer/PHPMailerAutoload.php";

 	$mail = new PHPMailer;

 	$mail -> IsSMTP();
 	$mail->Host = 'smtp.gmail.com';
 	$mail->Port = '587';
 	$mail->SMTPAuth = true;

 	$mail->Username = "abyssinie97@gmail.com";
 	$mail->Password = "6565gobi";

 	$mail->SMTPSecure = 'tls';
 	$mail->From = $_POST['email'];
 	$mail->FromName = $_POST['name'];

 	$mail->AddAddress("abyssinie97@gmail.com");
 	$mail->WordWrap = 80;
 	$mail->IsHTML(true);

 	
 	$mail->Subject = 'Contact client depuis votre site web petroleum';
 	$mail->Body = $messages;
    
 	if($mail->Send()){
 		echo "<span style='color:green; font-weight:bold;'>
 		Merci de nous avoir contacter.nous vous repondons dans quelques minutes..
 		</span>";
 	}
 	else{
 		echo "<span style='color:red; font-weight:bold;'>
 		Désolé! votre requete a echoué. veuillez réessayer a nouveau.
 		</span>";
 	}
 }


 ?>