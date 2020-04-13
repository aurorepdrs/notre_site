<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" href="../accueil.css" type="text/css" />
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
<?php

	$loisirs=$_GET['loisirs'];
	
	
	
	$sql='';
	
	$sql1='SELECT distinct SOUS_QUARTIER.Nom AS SQN, QUARTIERS.Nom AS Q
				FROM SOUS_QUARTIER, LOISIRS,COMMERCES,Etablissement_Scolaire,POSSEDER,SE_TROUVER,AVOIR_COM, QUARTIERS
				WHERE SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
				AND SOUS_QUARTIER.CodeQ=QUARTIERS.CodeQ
				AND Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
				AND SE_TROUVER.Id_loisirs=LOISIRS.Id_loisirs
				AND AVOIR_COM.IdCommerce=COMMERCES.IdCommerce
				AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
				AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ';
	
	
	if(isset($_GET['loisirs'])){
	$sql.=" AND SE_TROUVER.Nombre_Loisirs>0";
	
	$loisirs = $_GET['loisirs'];
	
	for( $i=0; $i<count($loisirs); $i++){
	
		$l=$loisirs[$i];
		$sql.= " AND LOISIRS.Type_loisirs like '%$l%'";
	
	}
	
	}

	if(isset($_GET['commerces'])){
	$sql.=" AND AVOIR_COM.Nombre_C >0";
				
	$commerces = $_GET['commerces'];

	for( $i=0; $i<count($commerces); $i++){
	
		$c=$commerces[$i];
		$sql.= " AND COMMERCES.Type_Commerce like '%$c%'";
	
	}
		
	}
	if(isset($_GET['etablissementscolaire'])){
				
	$sql.=" AND POSSEDER.Nombre_Ecole>0";
				
	$etablissements = $_GET['etablissementscolaire'];

	for( $i=0; $i<count($etablissements); $i++){
	
		$e=$etablissements[$i];
		$sql.= " AND Etablissement_Scolaire.type_Ecole like '%$e%'";
	
	}
		
	}
	
			
		if (!isset($_GET['commerces']) AND !isset($_GET['loisirs']) AND !isset($_GET['etablissementscolaire'])){
			
			echo 'VEUILLEZ SELECTIONNER AU MOINS UN CHAMP...';
			echo"<meta http-equiv='refresh' content='2; URL=formulaireinscrit.php'>";	
		}
		else{

			$sql=$sql1.$sql;
			$bdd = new PDO('mysql:host=localhost;dbname=COMMERCES', 'root', 'root');
				
				$reponse = $bdd->query($sql);
				
			echo '<h2 class="color: #464545" >VOICI LES SECTEURS QUI VOUS CORRESPONDENT LE PLUS</h2>';
		
			echo'<table class="table">';
  			echo'<thead class="thead-dark">';
   			 echo'<tr>';
     		 echo'<th scope="col">QUARTIERS</th>';
     		 echo'<th scope="col">SOUS QUARTIERS</th>';
    		echo'</tr>';
				echo'</thead>';
				
				while ($donnees = $reponse->fetch()){
		
					echo'<tbody>';
 			  	echo' <tr>';
    		 	echo' <td>'.$donnees['Q'].'</td>';
          		 echo' <td>'.$donnees['SQN'].'</td>';
          		}
   				 echo'</tr>';
				echo'</tbody>';
				echo'</table>';
				
				
				
				$reponse->closeCursor();}
?>

<title>
</title>
</head>
<body>

	
	


</body>
</html>


