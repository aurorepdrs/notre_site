<!DOCTYPE html>

<html>

<head>

<?php

	function enregistrer ($n, $p, $num, $mail, $mdp1, $genre, $voie, $adr, $cadr, $cp){
		$n = $_GET['n'];
		echo "Nom:".$n."<br>";
		$p = $_GET['p'];
		echo "Prénom:".$p."<br>";
		$num = $_GET['num'];
		echo "Téléphone:".$num."<br>";
		$mail = $_GET['mail'];
		echo "Adresse mail:".$mail."<br>";
		$mdp1 = $_GET['mdp1'];
		echo "Mot de passe:".$mdp1."<br>";
		$genre = $_GET['genre'];
		echo "Sexe:".$genre."<br>";
		$voie = $_GET['voie'];
		echo "Numéro de voie:".$voie."<br>";
		$adr = $_GET['adr'];
		echo "Adresse:".$adr."<br>";
		$cadr = $_GET['cadr'];
		echo "Complément d'adresse:".$cadr."<br>";
		$cp = $_GET['cp'];
		echo "Code postal:".$cp."<br>";
		
		
		$sql = "INSERT INTO utilisateur(nom, prenom, tel, email, motdepasse, sexe, num_voie, nom_voie, complement_adr, code_postal) VALUES ('$n', '$p', '$num', '$mail', '$mdp1', '$genre', '$voie', '$adr', '$cadr', '$cp')";


		$bdd = new PDO('mysql:host=localhost:3306;dbname=projets6', 'root', 'root');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $bdd->prepare($sql);
		$statement->execute();

		echo $sql;
	}


	$ok=TRUE;
	if($_GET['mdp1']!=$_GET['mdp2']) {
		echo "Les mots de passe sont différents";
		$ok=FALSE;
	}
	if($_GET['mdp1']=="") {
		echo "Le mot de passe n'a pas été saisi";	
		$ok=FALSE;
	}
	if($_GET['mdp2']=="") {
		echo "La confirmation de mot de passe n'a pas été saisie";	
		$ok=FALSE;
	}
	
	if($_GET['n']=="") {
		echo "Le nom n'a pas été saisi";	
		$ok=FALSE;
	}
	
	if($_GET['p']=="") {
		echo "Le prénom n'a pas été saisi";
		$ok=FALSE;
	}
	
	if($_GET['num']=="") {
		echo "Le téléphone n'a pas été saisi";	
		$ok=FALSE;
	}
	
	if($_GET['mail']=="") {
		echo "L'adresse mail n'a pas été saisie";	
		$ok=FALSE;
	}
	
	if($_GET['voie']=="") {
		echo "Le numéro de voie n'a pas été saisi";	
		$ok=FALSE;
	}
	
	if($_GET['adr']=="") {
		echo "Le nom de voie n'a pas été saisi";	
		$ok=FALSE;
	}
	
	if($_GET['cp']=="") {
		echo "Le code postal n'a pas été saisi";	
		$ok=FALSE;
	}
	
	if ($ok==FALSE) {
		echo "<meta http-equiv='refresh'content='2;URL=PageInscription.php'>";
	}
	else {
		enregistrer($_GET['n'],$_GET['p'],$_GET['num'],$_GET['mail'],$_GET['mdp1'],$_GET['genre'],$_GET['voie'], $_GET['adr'], $_GET['cadr'], $_GET['cp']);
		echo "<meta http-equiv='refresh'content='2;URL=PageAccueil.php'>";
	}
	

	
	
?>

</head>

<body>


</body>


</html>