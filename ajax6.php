<?php 
include 'dbConnect.php'; 
	$message="";

	function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     if ( ($_POST['password']!=""))
	{    

		if(!($_POST['email']=="")){

		$mail = checkInput($_POST['email']);
        $mail = filter_var($mail,FILTER_SANITIZE_EMAIL);
        if(filter_var($mail,FILTER_SANITIZE_EMAIL)) {
           $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
           $password_new = substr(str_shuffle($chars), 0,4);
           
          
           $bdd = Database::connect();
           $selection = $bdd->query("SELECT * FROM souscription WHERE  email='".$_POST['email']."' ");
           $results = $selection->fetch();
           $mail_users = $results['email'];

           if($mail==$results['email']){
                    $query = $bdd->query("UPDATE souscription SET codevalid='$password_new' WHERE email = '$mail'  "); 

                    if ($query) {
                       $to = $mail;
                       $subject ='votre nouveau mot de passe';
                       $message = 'Coucou, votre nouveau mot de passe est: '.$password_new.'
                       E-mail: '.$mail.'
                       Maintenanat vous pouvez se connecter en toute sécurité.';

                    if(mail($to, $subject, $message)){
                     echo "<span style='color:green; font-weight:bold;'>
                     un nouveau mot de passe a été envoyé à votre adresse email.
                     </span>";
                     echo "<div class='right-w3l'>
                     <a href='login.php' id='Submit' name='Submit' class='form-control fa fa-long-arrow-right bg-theme'> Se connecter </a>
                     </div>";
                           
                    }   
                }

             }
             else{
                   echo "<span style='color:green; font-weight:bold;'>
                     E-mail invalide.
                     </span>";
                  
             }
        }
    }else{  
            echo "<span style='color:green; font-weight:bold;'>
                     E-mail est réquis.
                     </span>";
            
    }
    Database::disconnect();
}
?>