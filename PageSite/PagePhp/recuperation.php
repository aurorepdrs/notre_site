<!DOCTYPE.html>
<?php
session_start();
?>
<html>
<head>
		
		 <link rel="stylesheet" href="../accueil.css" type="text/css" />
	<?php
	
	$sql='';
		
	$sql1='SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, SE_TROUVER.Nombre_Loisirs AS L, POSSEDER.Nombre_Ecole AS E, 
                FROM SOUS_QUARTIER, LOISIRS,Etablissement_Scolaire,POSSEDER,SE_TROUVER, QUARTIERS
                WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
                AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
                AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
                AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
                and Etablissement_Scolaire.type_Ecole like ?
                and LOISIRS.Type_loisirs like ?';
                
   		
    $sql2='SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, SE_TROUVER.Nombre_Loisirs AS L,  AVOIR_COM.Nombre_C AS AN
                FROM SOUS_QUARTIER, LOISIRS,COMMERCES,Etablissement_Scolaire,POSSEDER,SE_TROUVER,AVOIR_COM, QUARTIERS
                WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
                AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
                AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
                AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
                AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
                AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
                and COMMERCES.Type_Commerce like ? 
                and LOISIRS.Type_loisirs like ?';
               
               
    $sql3='SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, POSSEDER.Nombre_Ecole AS E, AVOIR_COM.Nombre_C AS AN
                FROM SOUS_QUARTIER, LOISIRS,COMMERCES,Etablissement_Scolaire,POSSEDER,SE_TROUVER,AVOIR_COM, QUARTIERS
                WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
                AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
                AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
                AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
                AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
                AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
                and COMMERCES.Type_Commerce like ? and Etablissement_Scolaire.type_Ecole like ?';
               


	$sql4 = 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, SE_TROUVER.Nombre_Loisirs AS L, POSSEDER.Nombre_Ecole AS E, AVOIR_COM.Nombre_C AS AN
                FROM SOUS_QUARTIER, LOISIRS,COMMERCES,Etablissement_Scolaire,POSSEDER,SE_TROUVER,AVOIR_COM, QUARTIERS
                WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
                AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
                AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
                AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
                AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
                AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
                and COMMERCES.Type_Commerce like ? and Etablissement_Scolaire.type_Ecole like ?
                and LOISIRS.Type_loisirs like ?';
               
                
	
	$sql5= 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, AVOIR_COM.Nombre_C AS AN
			FROM SOUS_QUARTIER, QUARTIERS, COMMERCES, AVOIR_COM
			WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ

			AND COMMERCES.IdCommerce=AVOIR_COM.IdCommerce
			AND AVOIR_COM.CodeSQ=SOUS_QUARTIER.CodeSQ
			AND COMMERCES.Type_Commerce=?';
			
	
	
	$sql6= 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, SE_TROUVER.Nombre_Loisirs AS L
		FROM SOUS_QUARTIER, QUARTIERS, SE_TROUVER, LOISIRS
			WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
			AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
			AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
			AND LOISIRS.Type_loisirs=?';
			
		
		$sql7='SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, posseder.Nombre_Ecole AS E
				FROM SOUS_QUARTIER, QUARTIERS, POSSEDER, Etablissement_Scolaire
					WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
					AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
				AND SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
				AND Etablissement_Scolaire.type_Ecole=?';
				
   		
			if ($_GET['etablissementscolaire']!='' AND  $_GET['loisirs']!='' AND $_GET['commerces']=='' ){
			$sql=$sql.$sql1;
			
                $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$req=$bdd->prepare($sql);
			
			$req->execute(array($_GET['etablissementscolaire'],$_GET['loisirs']));
			
			echo '<h1>Nombre Etablissements Scolaires et Types de loisirs par sous-quartier</h1>';
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['E'].' ';
			
			 echo $_GET['etablissementscolaire'];
			 echo','.$donnees['L'].' ';
			 echo $_GET['loisirs'];
			
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
			}
		
		
			$req->closeCursor();
			
               
                }
   		if ($_GET['commerces']!='' AND $_GET['loisirs']!='' AND $_GET['etablissementscolaire']=='' ){
   		
                  $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['loisirs']));
			echo '<h1>Nombre de commerces et Types de Loisirs par sous-quartier</h1>';
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			
			 echo','.$donnees['L'].' ';
			 echo $_GET['loisirs'];
			 echo','.$donnees['AN'].' ';
			 echo $_GET['commerces'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
			}
		
		
			$req->closeCursor();
			
                }
         if ($_GET['commerces']!='' AND $_GET['etablissementscolaire']!='' AND $_GET['loisirs']==''){ 
           
               $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['etablissementscolaire']));
			echo '<h1>Nombre de Commerces et Etablissements Scolaires par sous-quartier</h1>';
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['E'].' ';
			
			 echo $_GET['etablissementscolaire'];
			
			 echo','.$donnees['AN'].' ';
			 echo $_GET['commerces'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
			}
		
		
			$req->closeCursor();
			
                }
				
			if ($_GET['commerces']!='' AND $_GET['etablissementscolaire']!='' AND $_GET['loisirs']!='' ){
				 $sql=$sql.$sql4;
               
                $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['etablissementscolaire'],$_GET['loisirs']));
			echo '<h1>Nombre Etablissements scolaires, Types de Loisirs et commerces par sous-quartiers</h1>';
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['E'].' ';
			
			 echo $_GET['etablissementscolaire'];
			 echo','.$donnees['L'].' ';
			 echo $_GET['loisirs'];
			 echo','.$donnees['AN'].' ';
			 echo $_GET['commerces'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
			}
		
		
			$req->closeCursor();
			
			}
                
               if ($_GET['commerces']!='' AND $_GET['loisirs']=='' AND $_GET['etablissementscolaire']=='' ){
                $sql=$sql.$sql5;
				$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces']));
			echo '<h1>Nombre de commerces par sous-quartiers</h1>';
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['AN'].' ';
			 echo $_GET['commerces'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			
    			
			}
		
			$req->closeCursor();
			
				}
				
				if ($_GET['loisirs']!='' AND $_GET['etablissementscolaire']=='' AND $_GET['commerces']==''  ){
					$sql=$sql.$sql6;
					
					$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			echo '<h1>Nombre de Centres de loisirs par sous-quartiers</h1>';
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
			}
					
					if ( $_GET['etablissementscolaire']!='' AND $_GET['loisirs']=='' AND $_GET['commerces']=='' ){
					$sql=$sql.$sql7;
									$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['etablissementscolaire']));
			echo '<h1>Nombre Etablissements scolaires par sous-quartiers</h1>';
			while ($donnees = $req->fetch()){
			 echo 'il ya  ';
			 echo $donnees['E'].' ';
			 echo $_GET['etablissementscolaire'];
			 echo '  dans le quartier  ';
			 echo $donnees['SQN'];
			 ECHO '<br/>';
			 
			}
		
			$req->closeCursor();
			}               
			
			
			$ok=TRUE;
		if ($_GET['commerces']=='' AND $_GET['loisirs']=='' AND $_GET['etablissementscolaire']==''){
			$ok=FALSE;
			echo 'VEUILLEZ SELECTIONNER AU MOINS UN CHAMP...';
			echo"<meta http-equiv='refresh' content='1; URL=PageAccueil.php'>";	
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




		