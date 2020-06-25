<?php
require('dbConnect.php');  
	

	function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     if ( isset($_POST['email']) && ($_POST['password']!=""))
	{
		$mail = checkInput($_POST['email']);
		$password = checkInput($_POST['password']);
		$isSuccess = true;
          if(empty($mail))
        {
            
            $isSuccess = false;
        }
         if(empty($password))
        {
            
            $isSuccess = false;
        }
		if($isSuccess)
			{
				$bdd = Database::connect();
		        $selection = $bdd->query("SELECT * FROM souscription WHERE  email='".$_POST['email']."' ");
		        $results = $selection->fetch();
		        
		        	if($mail==$results['email'])
		        	{
		        		session_start();
		        		$_SESSION['name'] = $results['name'];
		        		$_SESSION['email'] = $results['email'];
		        		$_SESSION[id] = $results[id];

		        		if($results['email'] == "abyssiniea@gmail.com")
		        		{
		        			header('Location:rootspace/admin/index.php');
		        		}
		        		else
		        		{
		        			header('Location:espace-clients/index.php');
		        		}
		        		
		        	}
		        	else
		        	{
		        		 $msg = "<span style='color:red; font-weight:bold;'>
	Email ou mot de passe incorrect
	</span>";
		        	}
		        
		        Database::disconnect();
			}

	}	
 ?>