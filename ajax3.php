<?php
/*

*/

require'dbConnect.php';

if ( ($_POST['debit']!="") && ($_POST['montantpret']!="")){
$debit = $_POST['debit'];
$montantpret = $_POST['montantpret'];
$versementType = $_POST['versementType'];
$email = $_POST['email'];


$bddd = Database::connect();
$insertions = $bddd->prepare('UPDATE souscription SET typedebit=?,montantpret=?,typedeversement=? WHERE email=?');
$result = $insertions->execute(array($debit,$montantpret,$versementType,$email));




if($result){
	echo "<span style='color:green; font-weight:bold;'>
	<div class='sub-w3l'>
            <div class='sub-w3layouts_hub'>

                <label for='brand2' class='mb-3 text-secondary'>
                    <span></span><h4 class='w3pvt-title'>Confirmation</h4>                        
                    Votre demande est bel et bien enregistréé. Veuillez sous 24 heure verifiez votre boite de rececption ou votre spam.Nous vous enverrons votre identifiant compte et votre mot de passe pour avoir accès a votre espace client. Merci...<br>

                    En effet, l'ouveture definitive de votre compte et ds services associés aura lieu sous réserve de remplir les conditions d'éligibilité de la banque. Nos conseillers vous contacterons dans les plus brefs délais. Veuillez sous 24 heure consulter votre boite de reception ou votre spam.Nous vous enverrons vos identifiants pour se connecter a votre espace client. Merci

                    <br><a href='index.php' class='btn btn-primary'>Retour a l'acceuil</a>
                </label>
            </div>
        </div>
	</span>";
	
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Sorry! Your form submission is failed.
	</span>";
}
Database::disconnect();
}
?>