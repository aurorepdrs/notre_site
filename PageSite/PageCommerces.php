<?php
// on se connecte à notre base
 $bdd = new PDO('mysql:host=localhost;dbname=projetS6;', 'root', 'root');

?>
		
<html>
<head>
	<link rel="stylesheet" href="Commerces.css" type="text/css"
media="screen" />
	<title>Commerces page php</title>

</head>
<body>

	<div class="recherche_p">

		<form action="/search" id="searchthis" method="get">
			<input id="search" name="q" type="text" placeholder="Rechercher" />
			<input id="search-btn" type="submit" value="Rechercher" />
		</form>
	<div class="FormulaireCom">
		<form>
			
		</form>
	</div>
	</div>	
	<?php
	
		
		$sql = 'SELECT Type_Commerce FROM COMMERCES';
		$req = $bdd->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		// on va scanner tous les tuples un par un
		while ($data = mysql_fetch_array($req)) {
		// on affiche les résultats
		echo 'type de commerce : '.$data['Type_Commerce'].'<br />';
		
}
		mysql_free_result ($req);
		mysql_close ();
	?>
	monprojet:


	</body>
	</html>
	