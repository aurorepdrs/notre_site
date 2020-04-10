<!DOCTYPE.html>
	<?php
		session_start();
	?>
<html>
	<head>
		
		 <link rel="stylesheet" href="../accueil.css" type="text/css" />
	
	<?php
	
	$sql='';
		
	$sql1='SELECT distinct SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, LOISIRS,Etablissement_Scolaire,POSSEDER,SE_TROUVER,QUARTIERS
				WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
				AND SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
				AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
				AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
				and Etablissement_Scolaire.type_Ecole like ?
				and POSSEDER.Nombre_Ecole>0
				and LOISIRS.Type_loisirs like ?
				and SE_TROUVER.Nombre_Loisirs>0';
                
   		
   		
    $sql2='SELECT distinct SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, LOISIRS,COMMERCES,SE_TROUVER,AVOIR_COM, QUARTIERS
				WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
				AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
				AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
				AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
				and COMMERCES.Type_Commerce like ?
				and AVOIR_COM.Nombre_C >0
				and LOISIRS.Type_loisirs like ?
				and SE_TROUVER.Nombre_Loisirs>0';
               
               
               
    $sql3='SELECT distinct SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, COMMERCES,Etablissement_Scolaire,POSSEDER,AVOIR_COM, QUARTIERS
				WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
				AND SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
				AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
				AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
				and COMMERCES.Type_Commerce like ?
				and AVOIR_COM.Nombre_C >0
				and Etablissement_Scolaire.type_Ecole like ?
				and POSSEDER.Nombre_Ecole>0';
               


	$sql4 = 'SELECT distinct SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, LOISIRS,COMMERCES,Etablissement_Scolaire,POSSEDER,SE_TROUVER,AVOIR_COM, QUARTIERS
				WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
				AND SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
				AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
				AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
				AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
				AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
				and COMMERCES.Type_Commerce like ?
				and AVOIR_COM.Nombre_C >0
				and Etablissement_Scolaire.type_Ecole like ?
				and POSSEDER.Nombre_Ecole>0
				and LOISIRS.Type_loisirs like ?
				and SE_TROUVER.Nombre_Loisirs>0';
               
                
	
	$sql5= 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, QUARTIERS, COMMERCES, AVOIR_COM
				WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND COMMERCES.IdCommerce=AVOIR_COM.IdCommerce
				AND AVOIR_COM.CodeSQ=SOUS_QUARTIER.CodeSQ
				AND COMMERCES.Type_Commerce like? 
				AND AVOIR_COM.Nombre_C >0';
			
	
	
	$sql6= 'SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, QUARTIERS, SE_TROUVER, LOISIRS
				WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
				AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
				AND LOISIRS.Type_loisirs like?
				and SE_TROUVER.Nombre_Loisirs>0';
			
		
		
	$sql7='SELECT DISTINCT SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, QUARTIERS, POSSEDER, Etablissement_Scolaire
				WHERE SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
				AND SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
				AND Etablissement_Scolaire.type_Ecole like ?
				and POSSEDER.Nombre_Ecole>0';
				
  
   		
			if ($_GET['etablissementscolaire']!='' AND  $_GET['loisirs']!='' AND $_GET['commerces']=='' ){
				$sql=$sql.$sql1;
                $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$req=$bdd->prepare($sql);
				$req->execute(array($_GET['etablissementscolaire'],$_GET['loisirs']));
				echo '<h1>ETABLISSEMENTS SCOLAIRES ET LOISIRS</h1>';
				while ($donnees = $req->fetch()){
					 echo $donnees['Q'];
					 ECHO '       :';
				 	 echo $donnees['SQN'];
				 	 ECHO '<br/>';
				}
				$req->closeCursor();
			
            }
            
            
            
   		if ($_GET['commerces']!='' AND $_GET['loisirs']!='' AND $_GET['etablissementscolaire']=='' ){
   			$sql=$sql.$sql2;
            $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['loisirs']));
			echo '<h1>COMMERCES ET LOISIRS</h1>';
			while ($donnees = $req->fetch()){
			 echo $donnees['Q'];
					 ECHO '      :';
				 	echo $donnees['SQN'];
				 	ECHO '<br/>';
			}
			$req->closeCursor();
                }
                
              
                
         if ($_GET['commerces']!='' AND $_GET['etablissementscolaire']!='' AND $_GET['loisirs']==''){ 
           	$sql=$sql.$sql3;
               $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['etablissementscolaire']));
			echo '<h1>COMMERCES ET ETABLISSEMENTS SCOLAIRES</h1>';
			while ($donnees = $req->fetch()){
			echo $donnees['Q'];
			echo'      :';
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
				 echo '<h1>ETABLISSEMENTS SCOLAIRES, COMMERCES ET LOISIRS</h1>';
				 while ($donnees = $req->fetch()){
					echo $donnees['Q'];
					echo'       :';
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
					echo '<h1>COMMERCES</h1>';
					while ($donnees = $req->fetch()){
					echo $donnees['Q'];
					echo'       :';
				    echo $donnees['SQN'];
			 		ECHO '<br/>';	
			}
			$req->closeCursor();
				}
				
				
				
				if ($_GET['loisirs']!='' AND $_GET['etablissementscolaire']=='' AND $_GET['commerces']==''  ){
					$sql=$sql.$sql6;
					$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
					echo '<h1>LOISIRS</h1>';
					$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$req=$bdd->prepare($sql);
					$req->execute(array($_GET['loisirs']));
					while ($donnees = $req->fetch()){
						echo $donnees['Q'];
						echo'       :';
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
					echo '<h1>ETABLISSEMENTS SCOLAIRES</h1>';
					while ($donnees = $req->fetch()){
						 echo $donnees['Q'];
					 	 ECHO '       :';
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
			
		?>
<title>recuperation </title>
</head>
<body>

	
</body>
</html>




		