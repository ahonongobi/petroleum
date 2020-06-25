<?php session_start(); require('../dbConnect.php') ;

$bdd = Database::connect();
    $selection = $bdd->query("SELECT * FROM souscription WHERE  id=$_SESSION[id] ");
    $results = $selection->fetch();

    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur 
    if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
    { 
        //donner taille max du fichier
        $tailleMax = 10097152; 
        // definir les extensions autorisées 
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        
        // Testons si le fichier n'est pas trop gros (sa taille)
        if($_FILES['avatar']['size'] <= $tailleMax)
        {
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
            //Verifier si l'entexsion est dans le tableau
            if(in_array($extensionUpload, $extensionsValides))
            {
                //creer chemin pour le fichier
                $chemin = "../document/".time().".".$extensionUpload;
                // On peut valider le fichier et le stocker définitivement
                $resultat =  move_uploaded_file($_FILES['avatar']['tmp_name'],  $chemin);
                if($resultat)
                {
                    $bdd = Database::connect();
                    $updateavatar = $bdd->prepare('UPDATE souscription SET photo = :avatar WHERE id = :id');
                    $updateavatar->execute(array(
                        'avatar' => time().".".$extensionUpload,
                        'id' => $_SESSION['id']
                    ));
                    header('location:index.php?id=' .$_SESSION['id']);
                }
                else
                {
                    echo "Erreur durant l'importation de votre photo de profil";
                }
            }
            else
            {
                echo 'votre photo de profil doit etre au format jpg, jpeg, gif ou png';
            }
        }
        else
        {
            echo 'votre photo de profil ne doit pas depasser 10Mo';
        }
    }
    Database::disconnect();




?>