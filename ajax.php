<?php
/*
   
*/function checkInput($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
include 'dbConnect.php';





if ( ($_POST['name']!="") && ($_POST['email']!="")){
	$name = checkInput($_POST['name']);
	$email = checkInput($_POST['email']);
	$numero = checkInput($_POST['numero']);
	$genre = checkInput($_POST['genre']);
	$pays = checkInput($_POST['pays']);
	$dateofbirth = checkInput($_POST['dateofbirth']);
	$matrimoniale = checkInput($_POST['matrimoniale']);
	$image = checkInput($_FILES['Photo']['name']);
	$imagePath = 'document/' .basename($image);
	$imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
	$isSuccess = true;
	$isUploadSuccess = false; 
	
	if(empty($image))
	{
		
		$isSuccess = false;
	}
	else

	{ 
		$isUploadSuccess = true;
		if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" && $imageExtension != "JPG")
		{
			
			$isUploadSuccess = false;
		}

		if($_FILES['Photo']['size'] > 5000000000)
		{
			
			$isUploadSuccess = false;
		}

		if($isUploadSuccess)
		{
			if(!move_uploaded_file($_FILES['Photo']['tmp_name'], $imagePath))
			{
				
				$isUploadSuccess = false;
			}
		}
	}


        if($isSuccess && $isUploadSuccess)
        {
        	$default = 'nada';
		$bdd = Database::connect();
	$insertion = $bdd->prepare('INSERT INTO souscription(name,numero,email,genre,nationalite ,datenaissance,situationmatrimoniale,photo) VALUES(?,?,?,?,?,?,?,?)');
	$result = $insertion->execute(array($name,$numero,$email,$genre,$pays,$dateofbirth,$matrimoniale,$image));

	if($result){
		
		echo "<div class='right-w3l'>
        <a href='personnalinfo.php?email=$email' id='Submit' name='Submit' class='form-control fa fa-long-arrow-right bg-theme'> Etape suivante </a>
    </div>";
	}
	else{
		echo "<span style='color:red; font-weight:bold;'>
		Sorry! Your form submission is failed.
		</span>";
	}
	Database::disconnect();
	
	

	}
	

	




	
	

	
	


}

?>