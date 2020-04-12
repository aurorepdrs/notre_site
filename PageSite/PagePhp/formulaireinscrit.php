<!DOCTYPE HTML>

<html >


<head>
	 <link rel="stylesheet" href="../accueil.css" type="text/css" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Formulaire inscrit</title>
</head>

<body style='background-color: #464545;'>



<div class="container">
<div class="row">
<div class="col-sm">
	<h1> Loisirs </h1>
	<form action="enregistrement_inscrit.php" method="get" autocomplete="off"> 
	<p>Piscine <input type="checkbox" value="Piscine" name="loisirs[]"> </p>
	<p>Plateaux Sportifs <input type="checkbox" value="Plateaux_sportifs" name="loisirs[]"> </p>
	<p>Terrains de jeux <input type="checkbox" value="Terrains_jeux" name="loisirs[]"> </p>
	<p>Salles de combat <input type="checkbox" value="Salles_combat" name="loisirs[]"> </p>
	<p>Skateparks <input type="checkbox" value="Skatepark" name="loisirs[]"> </p>
	<p>Bowlings <input type="checkbox" value="Bowling" name="loisirs[]"> </p>
	<p>Salles de remise en forme <input type="checkbox" value="Salles_remise_forme" name="loisirs[]"> </p>
	<p>Gymnases <input type="checkbox" value="Gymnase" name="loisirs[]"> </p>
	<p>Port <input type="checkbox" value="Port" name="loisirs[]"> </p>
	<p>Randonnées <input type="checkbox" value="Randonnee" name="loisirs[]"> </p>
	<p>Cinémas <input type="checkbox" value="Cinema" name="loisirs[]"> </p>
	<p>Boulodromes <input type="checkbox" value="Boulodrome" name="loisirs[]"> </p>
	<p>Musées <input type="checkbox" value="Musee" name="loisirs[]"> </p>
	<p>Conservatoires <input type="checkbox" value="Conversatoire" name="loisirs[]"> </p>
	<p>Théâtres <input type="checkbox" value="Theatre" name="loisirs[]"> </p>
	<p>Terrains de tennis <input type="checkbox" value="Tennis" name="loisirs[]"> </p>
	<p>Cyclisme <input type="checkbox" value="Cyclisme" name="loisirs[]"> </p>
	<p>Domaines skiables <input type="checkbox" value="Domaine_skiable" name="loisirs[]"> </p>
	<p>Centres équestres <input type="checkbox" value="Centre_equestre" name="loisirs[]"> </p>
	<p>Athlétisme <input type="checkbox" value="Athletisme" name="loisirs[]"> </p>
	<p>Terrains de golf <input type="checkbox" value="Terrain_golf" name="loisirs[]"> </p>
	<p>Parcours sportifs <input type="checkbox" value="Parcours_sportifs" name="loisirs[]"> </p>	
	</div>
	
	
	 <div class="col-sm">
	<h1> Commerces </h1>
	
	<p>Hypermarché <input type="checkbox" value="Hypermarche" name="commerces[]"> </p>
	<p>Librairie <input type="checkbox" value="Librairie" name="commerces[]"> </p>
	<p>Magasins de vêtements <input type="checkbox" value="Magasin_vetements" name="commerces[]"> </p>
	<p>Magasins du foyer <input type="checkbox" value="Magasin_foyer" name="commerces[]"> </p>
	<p>Magasins de chaussures <input type="checkbox" value="Magasin_chaussures" name="commerces[]"> </p>
	<p>Magasins d'électroménager <input type="checkbox" value="Magasin_electromenager" name="commerces[]"> </p>
	<p>Magasins de meubles <input type="checkbox" value="Magasin_meubles" name="commerces[]"> </p>
	<p>Magasins de sport <input type="checkbox" value="Magasin_sport" name="commerces[]"> </p>
	<p>Magasins de mur <input type="checkbox" value="Magasin_murs" name="commerces[]"> </p>
	<p>Droguerie <input type="checkbox" value="Droguerie" name="commerces[]"> </p>
	<p>Parfumerie <input type="checkbox" value="Parfumerie" name="commerces[]"> </p>
	<p>Supermarché <input type="checkbox" value="Supermarche" name="commerces[]"> </p>
	<p>Bijouterie <input type="checkbox" value="Bijouterie" name="commerces[]"> </p>
	<p>Fleuriste <input type="checkbox" value="Fleuriste" name="commerces[]"> </p>
	<p>Magasins d'optique <input type="checkbox" value="Magasin_optique" name="commerces[]"> </p>
	<p>Magasins du médical <input type="checkbox" value="Magasin_medical" name="commerces[]"> </p>
	<p>Stations-service <input type="checkbox" value="Station_service" name="commerces[]"> </p>
	<p>Bricolage <input type="checkbox" value="Bricolage" name="commerces[]"> </p>
	<p>Supérette <input type="checkbox" value="Superette" name="commerces[]"> </p>
	<p>Épicerie <input type="checkbox" value="Epicerie" name="commerces[]"> </p>
	<p>Boulangerie <input type="checkbox" value="Boulangerie" name="commerces[]"> </p>
	<p>Boucherie <input type="checkbox" value="Boucherie" name="commerces[]"> </p>
	<p>Magasins de surgelés <input type="checkbox" value="Produits_surgeles" name="commerces[]"></p>
	<p>Poissonnerie <input type="checkbox" value="Poissonnerie" name="commerces[]"></p>
	</div>
	
	 <div class="col-sm">
	<h1> Établissements scolaires </h1>
	<p>École maternelle <input type="checkbox" value="Ecole_maternelle" name="etablissementscolaire[]"> </p>
	<p>École maternelle avec cantine <input type="checkbox" value="Ecole_maternelle_cantine" name="etablissementscolaire[]"> </p>
	<p>École élémentaire <input type="checkbox" value="Ecole_elementaire" name="etablissementscolaire[]"> </p>
	<p>École élémentaire avec cantine <input type="checkbox" value="Ecole_elementaire_cantine" name="etablissementscolaire[]"> </p>
	<p>Collège <input type="checkbox" value="College" name="etablissementscolaire[]"> </p>
	<p>Collège avec cantine <input type="checkbox" value="College_cantine" name="etablissementscolaire[]"> </p>
	<p>Collège avec internat <input type="checkbox" value="College_internat" name="etablissementscolaire[]"> </p>
	<p>Lycée général et technologique <input type="checkbox" value="Lycee_general_technologie" name="etablissementscolaire[]"> </p>
	<p>Lycée général et technologique avec cantine <input type="checkbox" value="Lycee_general_technologie_cantine" name="etablissementscolaire[]"> </p>
	<p>Lycée professionnel <input type="checkbox" value="Lycee_professionnel" name="etablissementscolaire[]"> </p>
	<p>Lycée professionnel avec cantine <input type="checkbox" value="Lycee_professionnel_cantine" name="etablissementscolaire[]"> </p>
	<p>Lycée professionnel avec internat <input type="checkbox" value="Lycee_professionnel_internat" name="etablissementscolaire[]"> </p>
	<p>Lycée technique <input type="checkbox" value="Lycee_technique" name="etablissementscolaire[]"> </p>
	<p>Lycée technique avec cantine <input type="checkbox" value="Lycee_technique_cantine" name="etablissementscolaire[]"> </p>
	<p>Lycée technique avec internat <input type="checkbox" value="Lycee_technique_internat" name="etablissementscolaire[]"> </p>
	<p>Prépa <input type="checkbox" value="Prepa" name="etablissementscolaire[]"> </p>
	<p>Formation santé <input type="checkbox" value="Formation_sante" name="etablissementscolaire[]"> </p>
	<p>Formation commerce <input type="checkbox" value="Formation_commerce" name="etablissementscolaire[]"> </p>
	<p>Formation non universitaire <input type="checkbox" value="Formation_non_universitaire" name="etablissementscolaire[]"> </p>
	<p>Formation recherche <input type="checkbox" value="Formation_recherche" name="etablissementscolaire[]"> </p>
	<p>Université <input type="checkbox" value="Universite" name="etablissementscolaire[]"> </p>
	<p>École ingénieur <input type="checkbox" value="Ecole_ingenieur" name="etablissementscolaire[]"> </p>
	<p>Enseignement supérieur privé <input type="checkbox" value="Enseignement_superieur_privee" name="etablissementscolaire[]"> </p>
	<p>Enseignement supérieur agricole <input type="checkbox" value=Enseignement_superieur_agricole" name="etablissementscolaire[]"> </p>
	<p>Enseignement supérieur agricole avec internat <input type="checkbox" value="Enseignement_superieur_agricole_internat" name="etablissementscolaire[]"> </p>
	<p>Autres enseignements supérieurs <input type="checkbox" value="Autres_enseignements_superieurs" name="etablissementscolaire[]"> </p>
	<p>Formation sport <input type="checkbox" value="Formation_sport" name="etablissementscolaire[]"> </p>
	<p>Résidence universitaire <input type="checkbox" value="Residence_universitaire" name="etablissementscolaire[]"> </p>
	<p>Restaurant universitaire <input type="checkbox" value="Restaurant_universitaire" name="etablissementscolaire[]"> </p>
	<p><input type="submit" value="SOUMETTRE"></p>
	</div>
	
	</form>
	</div>
	
</body>


</html>
	