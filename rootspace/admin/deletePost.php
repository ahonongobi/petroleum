<?php  
	require('database.php');
	if(!empty($_GET['id']))
	{
		$id = checkInput($_GET['id']);
	}

	$bdd = Database::connect();
	$delete = $bdd->prepare('DELETE FROM postadmin WHERE id = ? ');
	$delete->execute(array($id));

	$results = $delete->fetch();

	header('Location:postMessage.php');
	Database::disconnect();


	function checkInput($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
