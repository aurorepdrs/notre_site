<!DOCTYPE.html>
<?php
session_start();
?>
<html>
<head>
	<?php
		
		
			$em=isset($_GET['commerces']);
			$loisirs=isset($_GET['loisirs']);
			$etsco=isset($_GET['etablissementscolaire']);
			
			echo $commerce; echo '</br>';
			echo $loisirs; echo '</br>';
			echo $etsco; echo '</br>';	
	$sql = 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, posseder.Nombre_Ecole AS E
FROM SOUS_QUARTIER, QUARTIERS, POSSEDER, Etablissement_Scolaire
WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
AND SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
AND Etablissement_Scolaire.type_Ecole=?';
			
			$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['etablissementscolaire']));
		
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['E'].' ';
			 echo $_GET['etablissementscolaire'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
			}
		
			$req->closeCursor();
			
			?>
			<?php
			
				$sql = 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, AVOIR_COM.Nombre_C AS AN
FROM SOUS_QUARTIER, QUARTIERS, COMMERCES, AVOIR_COM
WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
AND COMMERCES.IdCommerce=AVOIR_COM.IdCommerce
AND AVOIR_COM.CodeSQ=SOUS_QUARTIER.CodeSQ
AND COMMERCES.Type_Commerce=?';


			
			$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces']));
		
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['AN'].' ';
			 echo $_GET['commerces'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			
    			
			}
		
			$req->closeCursor();
			
			
			?>
			<?php
		
		

	$sql = 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, SE_TROUVER.Nombre_Loisirs AS L
FROM SOUS_QUARTIER, QUARTIERS, SE_TROUVER, LOISIRS
WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
AND LOISIRS.Type_loisirs=?';

			
			$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['loisirs']));
		
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['L'].' ';
			 echo $_GET['loisirs'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
    			
			}
		
			$req->closeCursor();
			
			
			
			$ok=TRUE;
		if ($_GET['commerces']=='' AND $_GET['loisirs']=='' AND $_GET['etablissementscolaire']==''){
			$ok=FALSE;
			echo 'VEUILLEZ SELECTIONNER AU MOINS UN CHAMP...';
			echo"<meta http-equiv='refresh' content='2; URL=PageAccueil.php'>";	
}
		else{
			echo'';
		}
			
		?>
<title>recuperation </title>
</head>
<body>

	
</body>
</html>



