<?php 
    require('database.php');


    if(isset($_POST['submit']))
    {
        $civility = checkInput($_POST['civility']);
        $profil = checkInput($_POST['profil']);
        $name = checkInput($_POST['name']);
        $mail = checkInput($_POST['mail']);
        $password = checkInput($_POST['password']);
        $hash = checkInput(password_hash($password, PASSWORD_DEFAULT));
        $avatar = "parDefaut.png";
        

            $bdd = Database::connect();
            $insertion = $bdd->prepare('INSERT INTO register (civility,profil,name,mail,password,avatar) VALUES(?,?,?,?,?,?)');
            $insertion->execute(array($civility,$profil,$name,$mail,$hash,$avatar));
            Database::disconnect();
            header("Location:index.php");
        
    }


    function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur</title>
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/correct.css">
    <style type="text/css">
    	body
    	{
    		background-color: #c0c0c0;
    	}
    </style> 
</head>
<body>
    <div class="container admin">
        <div class="row">
            <h1><strong><center>Ajouter un utilisateur</center></strong></h1><br>
            
            <div class="span6">
               <img src="p3.png">  
            </div>


            <div class="span6">
                <form class="form" role="form"  method="POST">
                    <div class="form-group">
                        <label for="civility">Civilité:</label>
                        <input type="text" class="form-control" name="civility" id="civility" placeholder="Nom" required>
                    </div>

                    <div class="form-group">
                        <label for="profil">Profil:</label>
                        <input type="text" class="form-control" name="profil" id="profil" placeholder="Profil" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="Nom complet" required>
                    </div>

                    <div class="form-group">
                        <label for="mail">E-mail:</label>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail" required>
                    </div>

                    <div class="form-group">
                        <label for="mail">Mot de passe:</label>
                        <input type="password" class="form-control" name="password" id="password1" placeholder="Mot de passe" required>
                    </div>

                    <div class="form-group">
                        <label for="mail">Confirmation mot de passe:</label>
                        <input type="password" class="form-control" name="password" id="password2" placeholder="Confirmation mot de passe" required>
                    </div>

                    <br>
                    <div class="form">
                        <button type="submit" name="submit" class="btn btn-success">Ajouter</button>
                        <a href="index.php" class="btn btn-primary"><img src="../images/long_arrow_left_26px.png"> Retour</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

<script src="../js/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.onload = function()
    {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword()
    {
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;

        if(password2 != password1)
        {
            document.getElementById("password2").setCustomValidity("Mot de passe non identique");
        }
        else
        {
            document.getElementById("password2").setCustomValidity("");
        }
    }
    </script>
</body>
</html>