<?php
/*
  
*/
session_start();
 require'../../../dbConnect.php';


if ( ($_POST['email']!="") && ($_POST['sujet']!="")){
$sujet = $_POST['sujet'];
$email = $_POST['email'];
$message = $_POST['messages'];
$userid = $_SESSION['id'];
$bddd = Database::connect();
$insertions = $bddd->prepare('INSERT INTO message(email,sujet,message,userid,dateenvoie) VALUES(?,?,?,?,NOW())');
$result = $insertions->execute(array($email,$sujet,$message,$userid));

if($result){
	echo "<span style='color:green; font-weight:bold;'>
	Votre message à été envoyer avec succèss.
	</span>";
	
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Désolé! L'envoie a echoué. réessayer...
	</span>";
}
Database::disconnect();
}
?>