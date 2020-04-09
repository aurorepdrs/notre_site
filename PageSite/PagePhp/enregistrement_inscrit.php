<!DOCTYPE HTML>
<HTML>
<head>
<?php
	$sql='';
		echo(isset($_GET['loisirs']));
		echo(isset($_GET['commerces']));
		echo(isset($_GET['etablissementscolaire']));
	 
        	$ok=TRUE;
		if ($_GET['commerces']=='' AND $_GET['loisirs']=='' AND $_GET['etablissementscolaire']==''){
			$ok=FALSE;
			echo 'VEUILLEZ SELECTIONNER AU MOINS UN CHAMP...';
			echo"<meta http-equiv='refresh' content='1; URL=formulaireinscrit.php'>";	
}
		else{
			echo'';
		}        
?>

<title>
</title>
</head>
<body>

	
	


</body>
</html>


