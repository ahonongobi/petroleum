<?php
/*

*/
 require'dbConnect.php';


if ( ($_POST['adresse']!="") && ($_POST['pays']!="")){
$adresse = $_POST['adresse'];
$pays = $_POST['pays'];
$heberger = $_POST['radio'];
$notification = $_POST['radio2'];
$profession = $_POST['profession'];
$revenus = $_POST['revenues'];
$email = $_POST['email'];

$bddd = Database::connect();
$insertions = $bddd->prepare('UPDATE souscription SET adresse=?,pays=?,heberge=?,notification=? ,profession=?,revenusmenusel=? WHERE email=?');
$result = $insertions->execute(array($adresse,$pays,$heberger,$notification,$profession,$revenus,$email));

if($result){
	echo "<span style='color:green; font-weight:bold;'>
	Thank you for contacting us, we will get back to you shortly.
	</span>";
	echo "<div class='right-w3l'>
	<a href='bankinfo.php?email=$email' id='Submit' name='Submit' class='form-control fa fa-long-arrow-right bg-theme'> Etape suivante </a>
	</div>";
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Sorry! Your form submission is failed.
	</span>";
}
Database::disconnect();
}
?>