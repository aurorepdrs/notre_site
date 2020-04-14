<!DOCTYPE.html>
	<?php
		session_start();
	?>
<html class="background-color: #464545">
	<head>
		
		 <link rel="stylesheet" href="../accueil.css" type="text/css" />
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
			} 
            
   		if ($_GET['commerces']!='' AND $_GET['loisirs']!='' AND $_GET['etablissementscolaire']=='' ){
   			$sql=$sql.$sql2;
            $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['loisirs']));
			}
              
                
         if ($_GET['commerces']!='' AND $_GET['etablissementscolaire']!='' AND $_GET['loisirs']==''){ 
           	$sql=$sql.$sql3;
            $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$req=$bdd->prepare($sql);
			$req->execute(array($_GET['commerces'],$_GET['etablissementscolaire']));
                }
			
			
			if ($_GET['commerces']!='' AND $_GET['etablissementscolaire']!='' AND $_GET['loisirs']!='' ){
				 $sql=$sql.$sql4;
                 $bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			 	 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				 $req=$bdd->prepare($sql);
				 $req->execute(array($_GET['commerces'],$_GET['etablissementscolaire'],$_GET['loisirs']));
				
				}
                
               if ($_GET['commerces']!='' AND $_GET['loisirs']=='' AND $_GET['etablissementscolaire']=='' ){
               	 	$sql=$sql.$sql5;
					$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
					$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$req=$bdd->prepare($sql);
					$req->execute(array($_GET['commerces']));
					
				}
				
				
				if ($_GET['loisirs']!='' AND $_GET['etablissementscolaire']=='' AND $_GET['commerces']==''  ){
					$sql=$sql.$sql6;
					$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
					$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$req=$bdd->prepare($sql);
					$req->execute(array($_GET['loisirs']));
					
			}
			
					
				if ( $_GET['etablissementscolaire']!='' AND $_GET['loisirs']=='' AND $_GET['commerces']=='' ){
					$sql=$sql.$sql7;
					$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
			
					$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$req=$bdd->prepare($sql);
					$req->execute(array($_GET['etablissementscolaire']));		
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
			
			echo '<h2 class="color: #464545" >VOICI LES SECTEURS QUI VOUS CORRESPONDENT LE PLUS</h2>';
		
			echo'<table class="table">';
  			echo'<thead class="thead-dark">';
   			 echo'<tr>';
     		 echo'<th scope="col">QUARTIERS</th>';
     		 echo'<th scope="col">SOUS QUARTIERS</th>';
    		echo'</tr>';
  			echo'</thead>';
			while ($donnees = $req->fetch()){
			 	echo'<tbody>';
 			  	echo' <tr>';
    		 	echo' <td>'.$donnees['Q'].'</td>';
          		 echo' <td>'.$donnees['SQN'].'</td>';
          		}
   				 echo'</tr>';
				echo'</tbody>';
				echo'</table>';
	
			$req->closeCursor();
			
		?>
<title>recuperation </title>
</head>
<body class="background-color: #464545">

	
</body>
</html>




		