<!DOCTYPE html>

<?php
session_start();
?>

<html>

<head>

<?php
		$bdd = new PDO('mysql:host=localhost:3306;dbname=projets6', 'root', 'root');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "select email, motdepasse FROM utilisateur";
		$statement = $bdd->prepare($sql);
		$statement->execute();
		
		echo $sql."<br>"; 
		
		

	$ok=TRUE;
	if($_GET['mdp1']=="") {
		echo "Le mot de passe n'a pas été saisi"."<br>";
		$ok=FALSE;
	}
	if($_GET['mail']=="") {
		echo "L'adresse mail n'a pas été saisie"."<br>";	
		$ok=FALSE;
	}

	

	
	if(isset($_SESSION['utilisateur'])){
		$estconnecte=TRUE;
		$_SESSION['utilisateurconnecte']=$estconnecte;
		foreach($_SESSION['utilisateur'] as $table){
		echo $table[0]." ",$table[1], '<br>';
		}	
	}
	else{
		$estconnecte=FALSE;
		$_SESSION['utilisateurconnecte']=$estconnecte;
	}
	echo $_SESSION['utilisateurconnecte'];

	if ($ok==FALSE) {
		echo "<meta http-equiv='refresh'content='5;URL=PageConnexion.php'>";
	}
	else {
		$_SESSION['utilisateur'] = $statement->fetchAll(PDO::FETCH_NUM);
		echo "<meta http-equiv='refresh'content='5;URL=PageAccueil.php'>";
	}
	
?>

</head>

<body>


</body>


</html>