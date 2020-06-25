<?php 
require'../../../dbConnect.php';

	

	function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     if (($_POST['mdp']!=""))
	{    

		

		$mail = checkInput($_POST['mdp']);
    $password_new = checkInput($_POST['mdp2']);
    $id = $_POST['id'];
        $isSuccess = false;
           
          
           $bdd = Database::connect();
           $selection = $bdd->query("SELECT * FROM souscription WHERE  id=$id");
           $results = $selection->fetch();
           $mail_users =$results['codevalid'];

           if($mail==$results['codevalid']){
                    $query = $bdd->prepare("UPDATE souscription SET codevalid= ? WHERE id =?"); 
                    $result  = $query->execute(array($password_new,$id));
                       $isSuccess = true;
                    

             }
             if ($isSuccess) {
              echo "<span style='color:green; font-weight:bold;'>
                     Mots de passe modifié avec succèss.
                     </span>";
             }
             else{
                   echo "<span style='color:red; font-weight:bold;'>
                     vos données ne correspond a aucun client.
                     </span>";

                  
             }
        }
    
    Database::disconnect();


?>