<!DOCTYPE html>

<?php
session_start();
?>

<html>

  <head>
  	<link rel="stylesheet" href="accueil.css" type="text/css" />
	<meta charset="UTF-8">
    <title>Accueil</title>
  </head>
  
<body>


<center> <div class="bandeau" >
	

		<a class="lien" href="PageInscription.php">| INSCRIPTION ||</a>
		<a class="lien" href="PageConnexion.php"> SE CONNECTER ||</a>
		<a class="lien" href="PageContact.php"> NOUS CONTACTER |</a>

  </center> 
  </div>
	




<p id=theme> Quelles sont vos préférences ?</p>
<?php
$estconnecte=$_SESSION['utilisateurconnecte'];
echo $estconnecte."<br>";
?>





<a class="images" href="PageCommerces.php"> <img src="Images/commerces.jpg" width="300px"  border="3" style="border-color: black;" > </a> <br>
<a class="images" href="PageEtablissementsScolaires.php"> <img src="Images/enseignement.jpg" width="300px" border="3" style="border-color: black;" > </a> <br>
<a class="images" href="PageLoisirs.php"> <img src="Images/loisirs.jpg" width="300px" border="3" style="border-color: black;" > </a> <br>
<a class="images" href="PageQuartiers.php"> <img src="Images/quartiers.jpg" width="300px" border="3" style="border-color: black;" > </a> <br>









  </body>
  </html>
