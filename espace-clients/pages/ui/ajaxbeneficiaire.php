<?php
/*
  
*/
session_start();
 require'../../../dbConnect.php';


if ( ($_POST['name']!="") && ($_POST['pays']!="")){
$name = $_POST['name'];
$pays = $_POST['pays'];
$bic = $_POST['bic'];
$iban = $_POST['iban'];
$email = $_POST['email'];
$userid = $_SESSION['id'];
$bddd = Database::connect();
$insertions = $bddd->prepare('INSERT INTO beneficiaire(userid,email,nometprenom,bic,iban,pays) VALUES(?,?,?,?,?,?)');
$result = $insertions->execute(array($userid,$email,$name,$bic,$iban,$pays));

if($result){
	echo "<span style='color:green; font-weight:bold;'>
	Votre beneficiaire à été ajouter avec succèss.
	</span>";
	
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Désolé! L'ajout a echoué. réessayer...
	</span>";
}
Database::disconnect();
}
?>