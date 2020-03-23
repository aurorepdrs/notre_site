<!DOCTYPE html>

<?php
session_start();
?>

<html>

  <head>
    <link rel="stylesheet" href="accueil.css" type="text/css" />
  <meta charset="UTF-8"/>
    <title>Accueil</title>
  </head>
  
<body>

  <header>
            <h1> <img id="logo" src="logo.png"></h1>
            
        </header>

<nav>
           
            <ul class="menu">
                <li id="home"><a href="PageAccueil.php" class="homeIcon">Accueil</a></li>
                <li id="news"><a href="PageInscription.php">S'inscrire</a></li>
                <li id="about"><a href="PageConnexion.php">Se connecter</a></li>
                <li id="services"><a href="PageContact.php">Contact</a></li>
                
            </ul>

        </nav>






<div class="filtre">

<h2>Trouvez le quartier de Montpellier qui correspondra parfaitement a vos attentes.</h2> 

<SELECT name="loisirs" >
<OPTION VALUE="loisirs">LOISIRS </OPTION>
<OPTION VALUE="Piscine">Piscine</OPTION>
<OPTION VALUE="Plateaux_sportifs">Plateaux Sportifs</OPTION> 
<OPTION VALUE="Terrains_jeux">Terrains de jeux</OPTION> 
<OPTION VALUE="Salles_combat">Salles de combat</OPTION> 
<OPTION VALUE="Skatepark">Skateparks</OPTION>
<OPTION VALUE="Bowlings">Bowlings</OPTION> 
<OPTION VALUE="Salles_remise_forme">Salles de remise en forme</OPTION>
<OPTION VALUE="Gymnase">Gymnases</OPTION> 
<OPTION VALUE="Port">Port</OPTION>
<OPTION VALUE="Randonnee">Randonnées</OPTION> 
<OPTION VALUE="Cinémas">Cinémas</OPTION>
<OPTION VALUE="Boulodromes">Boulodromes</OPTION> 
<OPTION VALUE="Musees">Musées</OPTION>
<OPTION VALUE="Conservatoire">Conservatoires</OPTION> 
<OPTION VALUE="Theatre">Theâtres</OPTION>
<OPTION VALUE="Salles_combat">Salles de combat</OPTION> 
<OPTION VALUE="Tennis">Terrains de tennis</OPTION>
<OPTION VALUE="Cyclisme">Cyclisme</OPTION> 
<OPTION VALUE="Domaine_skiable">Domaines skiable</OPTION>
<OPTION VALUE="Salles_combat">Salles de combat</OPTION> 
<OPTION VALUE="Centre_equestre">Centres équestre</OPTION>
<OPTION VALUE="Salles_combat">Salles de combat</OPTION> 
<OPTION VALUE="Athletisme">Athlétimse</OPTION>
<OPTION VALUE="Terrain_golf">Terrains de golf</OPTION> 
<OPTION VALUE="Parcours_sportifs">Parcours sportif</OPTION>
</SELECT>



<SELECT name="commerces" >
<OPTION VALUE="commerces">COMMERCES </OPTION>
<OPTION VALUE="Hypermarche">Hypermarché</OPTION>
<OPTION VALUE="Librairie">Librairie</OPTION>
<OPTION VALUE="Magasin_vetements">Magasin de vêtements</OPTION>
<OPTION VALUE="Magasins_foyer">Magasin du foyer</OPTION>
<OPTION VALUE="Magasin_chaussures">Magasin de chaussures</OPTION>
<OPTION VALUE="Magasin_electromenager">Magasin d'electromenager</OPTION>
<OPTION VALUE="Magasin_meubles">Magasin de meubles</OPTION>
<OPTION VALUE="Magasin_sport">Magasin de sport</OPTION>
<OPTION VALUE="Magasin_murs">Magasins de mur</OPTION>
<OPTION VALUE="Droguerie">Droguerie</OPTION>
<OPTION VALUE="Parfurmerie">Parfumerie</OPTION>
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


<SELECT name="etablissement scolaire" >
<OPTION VALUE="etablissement_scolaire">ETABLISSEMENTS SCOLAIRES </OPTION>
<OPTION VALUE="Ecole_maternelle">Ecole maternelle</OPTION>
<OPTION VALUE="Ecole_maternelle_cantine">Ecole maternelle (cantine)</OPTION>
<OPTION VALUE="Lycee_professionnel">Lycée professionnel</OPTION>
<OPTION VALUE="Lycee_professionnel_cantine">Lycée professionnel (cantine)</OPTION>
<OPTION VALUE="Lycee_professionnel_internat">Lycée professionnel (internat)</OPTION>
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
<OPTION VALUE="Enseignement_superieur_privee">Enseignement superieur privée</OPTION>
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

</div>





<?php
$estconnecte=$_SESSION['utilisateurconnecte'];
echo $estconnecte."<br>";
?>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46221.28181651607!2d3.8391420883842122!3d43.61007875192444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af0725dd9db1%3A0xad8756742894e802!2sMontpellier!5e0!3m2!1sfr!2sfr!4v1584966116617!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="padding-right: 500px; padding-top:600px;"   aria-hidden="false" tabindex="0"></iframe>








  </body>
  </html>