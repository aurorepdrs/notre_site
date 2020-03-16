<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8" />
	<title>Inscription</title>
	<link rel="stylesheet" href="inscription.css" type="text/css" media="screen" />

	<style>
 		#trait{
 			width: 700px;
 			border-right: medium solid;
 			}
	</style>

</head>

<body>

	<h2> <a href="PageAccueil.php"> Accueil</a> </h2>

	<div id="inscription">

	<table>
	<tr>
	<td id=trait>

	<form action="enregistrement.php" method="get" autocomplete="off"> 

	<p> Nom : <input type="text" name="n" value=""/> </p>
	<p> Prénom : <input type="text" name="p" value=""/> </p>
	<p> Numéro de téléphone : <input type="number" name="num" value=""/> </p>
	<p> Email : <input type="text" name="mail" value=""/> </p>
	<p> Mot de passe : <input type="password" name="mdp1" value=""/> </p>
	<p> Confirmation du mot de passe : <input type="password" name="mdp2" value=""/> </p>

	</td>

	<td>

	<p id= "renseignement" > RENSEIGNEMENTS<br> </p> <br>
	<p> Homme : <input type="radio" name="genre" value="M"> </p>
	<p>Femme : <input type="radio" name="genre" value="F"> </p> <br>

	<br>
	<p> Numéro de voie : <input type="number" name="voie" value=""/> </p>
	<p> Nom de la rue: <input type="text" name="adr" value=""/> </p>
	<p> Complément d'adresse : <input type="text" name="cadr" value=""/> </p>
	<p> Code postal : <input type="number" name="cp" value=""/> </p>

	</td>
	</tr>
	</table>

	<p> <input type="submit" value="Envoyer"> </p> 

	</form>
	</div>

</body>

</html>
