<!DOCTYPE html>


<?php
	session_start();
	session_destroy();
	echo "Vous êtes déconnectés";
	echo "<meta http-equiv='refresh'content='3;URL=PageAccueil.php'>";
?>

<html>

	<head>
		<meta charset="UTF-8">
		<title>Déconnexion</title>
		<link rel="stylesheet" href="../inscription.css" type="text/css" />
	</head>


</html>