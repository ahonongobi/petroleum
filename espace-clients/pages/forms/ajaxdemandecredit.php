
<?php
/*
  
*/
session_start();
 require'../../../dbConnect.php';


if ( ($_POST['email']!="") && ($_POST['numero']!="")){
$email = $_POST['email'];
	$name = $_POST['name'];
	$adresse = $_POST['adresse'];
	$revenue = $_POST['revenus'];
	$montant = $_POST['montant'];
	$pays = $_POST['pays'];
	$numero = $_POST['numero'];
$userid = $_SESSION['id'];
$bddd = Database::connect();
$requete = $bddd->prepare('INSERT INTO credit(userid) VALUES(?)');
$totale = $requete->execute(array($userid));

$insertions = $bddd->prepare('UPDATE credit SET email=?,name=? WHERE userid=?');
	$result = $insertions->execute(array($email,$name,$userid));

	$insertionsb = $bddd->prepare('UPDATE credit SET montant=? WHERE userid=?');
	$results = $insertionsb->execute(array($montant,$userid));


if($totale){
	
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