<% page language="java" contentType="text/html" charset="ISO-8859-1" %>
<!DOCTYPE html> 
<html>
<head>
	<title>Inscription</title>
	<script>
		function validate(){
			name = document.form.name.value;
			email = document.form.email.value;
			password = document.form.password.value;
			passwordConfirm = document.form.passwordConfirm.value;
			if (name==null || name=="") { alert("Vous devez enter votre nom"); return false;}
			else if (email==null || email=="") { alert("Vous devez enter votre email valid"); return false;}
			else if (password==null || password=="") { alert("Vous devez choisir un mot de passe"); return false;}
			else if (password.length<3) { alert("Votre mode passe doit comporter au moins six caractère"); return false;}
			else if (password!=passwordConfirm) { alert("Mot de passe de Confirmation non identique"); return false;}
		}
	</script>
</head>
<body>
	<center>
   <h2>Inscription sur la plateforme de commande de billets en ligne</h2>
   <form name="form" action="RegisterServlet" method="post" onsubmit="return validate()">
   	<table  align="center">
   		<tr>
   			<td>Nom Complet:</td>
   			<td><input type="text" name="name"></td>
   		</tr>
   		<tr>
   			<td>Email:</td>
   			<td><input type="email" name="email"></td>
   		</tr>
   		<tr>
   			<td>Mot de Passe:</td>
   			<td><input type="password" name="password"></td>
   		</tr>
   		<tr>
   			<td>Confirmation de mot de passe:</td>
   			<td><input type="password" name="passwordConfirm"></td>
   		</tr>
   		<tr>
   			<td><%= (request.getAttribute("errMessage")==null)?"": request.getAttribute("errMessage") %></td>
   			<td><input type="text" name="name"></td>
   		</tr>

   		 <tr>
   			<td></td>
   			<td><input type="submit" value="S'inscrire"> </input>
             <input type="reset" value="Annuler"> </input>
   			</td>
   		</tr>
   	</table>
   	
   </form>
    </center>
</body>
</html>