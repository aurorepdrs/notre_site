<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">
    <title>Connexion</title>
	<link rel="stylesheet" href="../inscription.css" type="text/css"  />

</head>
  
<body>

	<h2> <a href="PageAccueil.php"> Accueil</a> </h2>

	<div id="connexion">  
  	<form method="get" action="connecte.php">
       
  	<p> Adresse mail : <br/>
  	<input type="text" name="mail" placeholder="Ex: philippe@hotmail.com" /> <br/> </p>
  	<p>Mot de passe : <br/>
  	<input type="passeword" name="mdp1" placeholder="Ex: licorne34110" /> <br/> </p>
	<p> <INPUT type="submit" value="Connexion"> </p>

  	<p>Mot de passe oublié ? <br/>
  	<a href= "MotDePasse.php">Cliquez ici</a> <br/> </p>
          
  	<a href= "PageInscription.php">S'inscrire</a><br/>
          
  	</form>
  
	</div>
	
</body>

</html>