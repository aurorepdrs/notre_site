<!DOCTYPE html>


<?php
session_start();
$estconnecte=$_SESSION['utilisateurconnecte'];
?>

<html>

<head>
	<meta charset="UTF-8"/>
    <title>Accueil</title>
	<link rel="stylesheet" href="../accueil.css" type="text/css" />
</head>
  
<body>
<?php
	if ($estconnecte==FALSE){
		echo "Vous n'êtes pas connectés";
	}
?>
	<header>
        <h1> <img id="logo" src="../logo.png"></h1>
    </header>

	<nav>
           
        <ul class="menu">
			<li ><a href="PageAccueil.php" class="homeIcon">Accueil</a></li>
			<li ><a href="stats.php">Statistiques</a></li>
            <li ><a href="PageInscription.php">S'inscrire</a></li>
            <li ><a href="PageConnexion.php">Se connecter</a></li>
            <li ><a href="PageContact.php">Contact</a></li>
        </ul>

    </nav>

	<div class="filtre">

	<h2>Trouvez le quartier de Montpellier qui correspondra parfaitement à vos attentes.</h2> 

<form action="recuperation.php" method="get" >
<SELECT name="loisirs" >
<OPTION VALUE="">LOISIRS </OPTION>
<OPTION VALUE="Piscine">Piscine</OPTION>
<OPTION VALUE="Plateaux_sportifs">Plateaux Sportifs</OPTION> 
<OPTION VALUE="Terrains_jeux">Terrains de jeux</OPTION> 
<OPTION VALUE="Salles_combat">Salles de combat</OPTION> 
<OPTION VALUE="Skatepark">Skateparks</OPTION>
<OPTION VALUE="Bowling">Bowlings</OPTION> 
<OPTION VALUE="Salles_remise_forme">Salles de remise en forme</OPTION>
<OPTION VALUE="Gymnase">Gymnases</OPTION> 
<OPTION VALUE="Port">Port</OPTION>
<OPTION VALUE="Randonnee">Randonnées</OPTION> 
<OPTION VALUE="Cinema">Cinémas</OPTION>
<OPTION VALUE="Boulodrome">Boulodromes</OPTION> 
<OPTION VALUE="Musee">Musées</OPTION>
<OPTION VALUE="Conservatoire">Conservatoires</OPTION> 
<OPTION VALUE="Theatre">Theâtres</OPTION> 
<OPTION VALUE="Tennis">Terrains de tennis</OPTION>
<OPTION VALUE="Cyclisme">Cyclisme</OPTION> 
<OPTION VALUE="Domaine_skiable">Domaines skiables</OPTION>
<OPTION VALUE="Centre_equestre">Centres équestres</OPTION>
<OPTION VALUE="Salles_combat">Salles de combat</OPTION> 
<OPTION VALUE="Athletisme">Athlétimse</OPTION>
<OPTION VALUE="Terrain_golf">Terrains de golf</OPTION> 
<OPTION VALUE="Parcours_sportifs">Parcours sportif</OPTION>
</SELECT>



<SELECT name="commerces" >
<OPTION VALUE="">COMMERCES </OPTION>
<OPTION VALUE="Hypermarche">Hypermarché</OPTION>
<OPTION VALUE="Librairie">Librairie</OPTION>
<OPTION VALUE="Magasin_vetements">Magasin de vêtements</OPTION>
<OPTION VALUE="Magasin_foyer">Magasin du foyer</OPTION>
<OPTION VALUE="Magasin_chaussures">Magasin de chaussures</OPTION>
<OPTION VALUE="Magasin_electromenager">Magasin d'electromenager</OPTION>
<OPTION VALUE="Magasin_meubles">Magasin de meubles</OPTION>
<OPTION VALUE="Magasin_sport">Magasin de sport</OPTION>
<OPTION VALUE="Magasin_murs">Magasins de mur</OPTION>
<OPTION VALUE="Droguerie">Droguerie</OPTION>
<OPTION VALUE="Parfumerie">Parfumerie</OPTION>
<OPTION VALUE="Supermarche">Supermarché</OPTION>
<OPTION VALUE="Bijouterie">Bijouterie</OPTION>
<OPTION VALUE="Fleuriste">Fleuriste</OPTION>
<OPTION VALUE="Magasin_optique">Magasin d'optique</OPTION>
<OPTION VALUE="Magasin_medical">Magasin du médical</OPTION>
<OPTION VALUE="Station_service">Station service</OPTION>
<OPTION VALUE="Bricolage">Bricolage</OPTION>
<OPTION VALUE="Superette">Supérette</OPTION>
<OPTION VALUE="Epicerie">Épicerie</OPTION>
<OPTION VALUE="Boulangerie">Boulangerie</OPTION>
<OPTION VALUE="Boucherie">Boucherie</OPTION>
<OPTION VALUE="Produits_surgeles">MAgasin de surgelés</OPTION>
<OPTION VALUE="Poissonnerie">Poissonnerie</OPTION>
</SELECT>


<SELECT name="etablissementscolaire" >
<OPTION VALUE="">ETABLISSEMENTS SCOLAIRES </OPTION>
<OPTION VALUE="Ecole_maternelle">Ecole maternelle</OPTION>
<OPTION VALUE="Ecole_maternelle_cantine">Ecole maternelle (cantine)</OPTION>
<OPTION VALUE="Lycee_professionnel">Lycée professionnel</OPTION>
<OPTION VALUE="Lycee_professionnel_cantine">Lycée professionnel (cantine)</OPTION>
<OPTION VALUE="lycee_professionnel_internat">Lycée professionnel (internat)</OPTION>
<OPTION VALUE="Lycee_technique">Lycée technologique</OPTION>
<OPTION VALUE="Lycee_technique_cantine">Lycée technologique (cantine)</OPTION>
<OPTION VALUE="Lycee_technique_internat">Lycée technologique (internat)</OPTION>
<OPTION VALUE="Prepa">Prépa</OPTION>
<OPTION VALUE="Formation_sante">Formation santé</OPTION>
<OPTION VALUE="Formation_commerce">Formation commerce</OPTION>
<OPTION VALUE="Formation_non_universitaire">Formation non universitaire</OPTION>
<OPTION VALUE="Formation_recherche">Formation recherche</OPTION>
<OPTION VALUE="Universite">Université</OPTION>
<OPTION VALUE="Ecole_ingenieur">École ingenieur</OPTION>
<OPTION VALUE="Enseignement_superieur_privee">Enseignement superieur privé</OPTION>
<OPTION VALUE="Enseignement_superieur_agricole">Enseignement superieur agricole</OPTION>
<OPTION VALUE="Enseignement_superieur_agricole_internat">Enseignement superieur agricole (internat)</OPTION>
<OPTION VALUE="Autres_enseignements_superieurs">Autres enseignements superieurs</OPTION>
<OPTION VALUE="Formation_sport">Formation sport</OPTION>
<OPTION VALUE="Residence_universitaire">Résidence universitaire</OPTION>
<OPTION VALUE="Ecole_elementaire_cantine">Ecole élémentaire (cantine)</OPTION>
<OPTION VALUE="College">Collège</OPTION>
<OPTION VALUE="College_cantine">Collège (cantine)</OPTION>
<OPTION VALUE="College_internat">Collège (internat)</OPTION>
<OPTION VALUE="Lycee_general_technologie">Lycée général technologique</OPTION>
<OPTION VALUE="Lycee_general_technologie_cantine">Lycée général technologique (cantine)</OPTION>
<OPTION VALUE="Lycee_general_technologie_internat">Lycée général technologique (internat) </OPTION>
</SELECT>

	<p style="padding-left: 250px"> <input type="submit" value="RECHERCHER"> </p> 

	</form>
	
	</div>


<?php
	if ($estconnecte==TRUE){
		echo "<div class='container'>"."<br>"."<br>";
		echo "<table align=center>";
		echo "<td>"."<a class='images' href='PageQuartiers/Centre.php'>"."<img src='../Images/centre.jpg' width='300px' height='150px'  border='3' style='border-color: black;' >"."<div class='text'>"."<h3>Centre</h3>"."</div>"."</a>"."<br>"."</td>";
		echo "<td>"."<a class='images' href='PageQuartiers/HopitauxFaculte.php'>"." <img src='../Images/hopitauxfacultes.jpg' width='300px' height='150px' border='3' style='border-color: black;' >"."<div class='text'>"."<h3>Hopitaux Facultés</h3>"."</div>"."</a>"." <br>"."</td>";
		echo "<td>"."<a  class='images' href='PageQuartiers/PortMarianne.php'>"." <img src='../Images/portmarianne.jpg' width='300px' height='150px' border='3' style='border-color: black;' >"."<div class='text'>"."<h3>Port Marianne</h3>"."</div>"."</a>". "<br>".	"</td>";
		echo "<td>"."<a  class='images' href='PageQuartiers/PresDarenes.php'>"." <img src='../Images/presdarenes.jpg' width='300px' height='150px' border='3' style='border-color: black;' >"."<div class='text'>"."<h3>Près d'arènes</h3>"."</div>"." </a>"." <br>"."</td>";
		echo "</table>";
		echo "<table align=center>";
		echo "<td>"."<a  class='images' href='PageQuartiers/CroixDargent.php'>"." <img src='../Images/croixdargent.jpg' width='300px' height='150px' border='3' style='border-color: black;' >"."<div class='text'>"."<h3>Croix d'argent</h3>"."</div>"." </a> "."<br>"."	</td>";
		echo "<td>"."<a  class='images' href='PageQuartiers/Mosson.php'>"." <img src='../Images/mosson.jpg' width='300px' height='150px' border='3' style='border-color: black;'>"."<div class='text'>"."<h3>Mosson</h3>"."</div>"." </a> "."<br>"."</td>";
		echo "<td>"."	<a  class='images' href='PageQuartiers/Cevennes.php'>"." <img src='../Images/cevennes.jpg' width='300px' height='150px' border='3' style='border-color: black;' >"."<div class='text'>"."<h3>Cevennes</h3>"."</div>"." </a>"." <br>".	"</td>";
		echo "</table>";
	
		echo "</div>";
		
		echo "<br>"."<br>"."<a href='formulaireinscrit.php' >Choisissez vos préférences</a>"."<br>";
		echo "<a href='PageDeconnexion.php' >Se déconnecter</a>"."<br>";
	}
?>
	
	<div id="carteaccueil">
	<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46221.28181651607!2d3.8391420883842122!3d43.61007875192444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier!5e0!3m2!1sfr!2sfr!4v1584966116617!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="padding-left: 500px; padding-top:100px;"   aria-hidden="false" tabindex="0"></iframe>
	</div>


	<p id="bas">Site Francais <img  width="20" src="../drapeau.png"/> </p>
</body>


</html>