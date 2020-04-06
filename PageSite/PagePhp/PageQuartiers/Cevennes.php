<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="../../quartiers.css" type="text/css" />
  <meta charset="UTF-8"/>
    <title>Cevennes</title>
  </head>
  
<header>
            <h1>
                <img id="logo" src="../../logo.png"></h1></header>
    <nav>
           
            <ul class="menu">
                <li ><a href="../PageAccueil.php" >Accueil</a></li>
                <li ><a href="Cevennes.php" >Cevennes</a></li>
                <li ><a href="Centre.php">Centre</a></li>
                <li ><a href="CroixDargent.php">Croix d'argent</a></li>
                <li ><a href="HopitauxFaculte.php">Hopitaux Faculté</a></li>
                <li ><a href="Mosson.php"> Mosson</a></li>
                <li ><a href="PortMarianne.php">Port Marianne</a></li>
                <li ><a href="PresDarenes.php">Près d'arènes</a></li>
                
            </ul>

        </nav>

    <body>
        <h2> Quartier des Cevennes</h2>
        <div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11554.428300939058!2d3.8411167890645244!3d43.614722201254466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6aef42044b449%3A0x129f2d7be9ad785e!2sLes%20C%C3%A9vennes%2C%20Montpellier!5e0!3m2!1sfr!2sfr!4v1584966877076!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>


   <h3>STATISTIQUES DU QUARTIER</h3>
        <?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ProjetS6;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT COUNT(Etablissement_Scolaire.idEcole) AS total,QUARTIERS.Nom
        FROM Etablissement_Scolaire,QUARTIERS,SOUS_QUARTIER,POSSEDER
        WHERE Etablissement_Scolaire.idEcole=POSSEDER.IdEcole
        AND QUARTIERS.CodeQ=SOUS_QUARTIER.CodeQ
        AND SOUS_QUARTIER.CodeSQ=POSSEDER.CodeSQ
        AND QUARTIERS.Nom LIKE "Cevennes"
        GROUP BY QUARTIERS.Nom');

while ($donnees = $reponse->fetch())
{
    echo "Etablissement Scolaire: " ;
    echo $donnees['total'] ;
}

$reponse->closeCursor();

?>

<br>
<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ProjetS6;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT COUNT(LOISIRS.id_loisirs) AS total,QUARTIERS.Nom
        FROM LOISIRS,QUARTIERS,SOUS_QUARTIER,SE_TROUVER
        WHERE LOISIRS.Id_loisirs=SE_TROUVER.Id_loisirs
        AND QUARTIERS.CodeQ=SOUS_QUARTIER.CodeQ
        AND SOUS_QUARTIER.CodeSQ=SE_TROUVER.CodeSQ
        AND QUARTIERS.Nom LIKE "cevennes"
        GROUP BY QUARTIERS.Nom');

while ($donnees = $reponse->fetch())
{
    echo "Loisirs: " ;
    echo $donnees['total'] ;
}

$reponse->closeCursor();

?>
<br>
<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ProjetS6;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT COUNT(COMMERCES.IdCommerce) AS total,QUARTIERS.Nom
        FROM COMMERCES,QUARTIERS,SOUS_QUARTIER,AVOIR_COM
        WHERE COMMERCES.IdCommerce=AVOIR_COM.IdCommerce
        AND QUARTIERS.CodeQ=SOUS_QUARTIER.CodeQ
        AND SOUS_QUARTIER.CodeSQ=AVOIR_COM.CodeSQ
        AND QUARTIERS.Nom LIKE "cevennes"
        GROUP BY QUARTIERS.Nom');

while ($donnees = $reponse->fetch())
{
    echo "Commerces: " ;
    echo $donnees['total'] ;
}

$reponse->closeCursor();

?>
    </body>
</html>