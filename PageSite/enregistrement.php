<!DOCTYPE html>
<html>
    
    <head>
        
    </head>
    <body>
  <h1>toto</h1>  
<?php
        
         try
{
  $bdd = new PDO('mysql:host=localhost;dbname=ProjetS6;', 'root', 'root');
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

        
        $nom = $_GET["nom"];
        echo "nom ".$nom."<br>";
        $prenom = $_GET["prenom"];
        echo "prenom ".$prenom."<br>";
        $tel = $_GET["tel"];
        echo "tel ".$tel."<br>";
        $mail = $_GET["mail"];
        echo "mail ".$mail."<br>";
        $mdp1 = $_GET["mdp1"];
        echo "mdp1 ".$mdp1."<br>";
        $mdp2 = $_GET["mdp2"];
        echo "mdp2 ".$mdp2."<br>";
        $genre = $_GET["genre"];
        echo "genre ".$genre."<br>";
        $voie = $_GET["voie"];
        echo "voie ".$voie."<br>";
        $adr = $_GET["adr"];
        echo "adr ".$adr."<br>";
        $cadr = $_GET["cadr"];
        echo "cadr ".$cadr."<br>";
        $cp = $_GET["cp"];
        echo "cp ".$cp."<br>";
        
        echo "nom avant requete ".$nom."<br>";

        $sql = "INSERT  INTO UTILISATEUR(nom,prénom,tel,email,motdepasse,motdepasse2,sexe,num_voie,nom_voie,complement_adr,code_postal) VALUES('$nom','$prenom',$tel,'$mail','$mdp1','$mdp2','$genre',$voie,'$adr','$cadr',$cp)";
        
        
        
        echo "sql ".$sql."<br>";

$rep = $bdd->query('select nom from UTILISATEUR');
  
        

        while ($ligne = $rep ->fetch())  { 
          echo "<tr>";
           echo "<td>".$ligne['nom']."<br />\n"."</td>";
            echo"</tr>\n";
        
}
$rep ->closeCursor();

        

        ?>
        
        
          <h1>titi</h1>  

    </body>
</html>
