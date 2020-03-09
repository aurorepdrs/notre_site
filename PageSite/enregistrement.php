<!DOCTYPE html>
<html>
    
    <head>
        
    </head>
    <body> 
<?php
function enregistrer($nom,$prenom,$tel,$mail,$mdp1,$genre,$voie,$adr,$cadr,$cp){     
        $sql = "INSERT  INTO UTILISATEUR(nom,prénom,tel,email,motdepasse,sexe,num_voie,nom_voie,complement_adr,code_postal) VALUES('".$nom."','".$prenom."',".$tel.",'".$mail."','".$mdp1."','".$genre."',".$voie.",'".$adr."','".$cadr."',".$cp.")";
    
        echo "req ".$sql."<br>";
                
         try
        {
          $bdd = new PDO('mysql:host=localhost;dbname=ProjetS6;', 'root', 'root');
         $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                               $bdd->query($sql);

        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
    }

      
        $ok=true;
        
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
        
         if($_GET['nom']==""){
echo "Le champ nom n’a pas été saisi </br>";
$ok=false;   
        }
         if($_GET['prenom']==""){
echo "Le champ prenom n’a pas été saisi </br>";
$ok=false;
}
        if($_GET['tel']==""){
echo "Le champ téléphone n’a pas été saisi</br>";
$ok=false;
}
        if($_GET['mail']==""){
echo "Le champ email n’a pas été saisi</br>";
$ok=false;
}
        
        if($_GET['mdp1']!= $_GET['mdp2'] or $_GET['mdp1']=="" or $_GET['mdp2']==""){
echo "Les mots de passe ne sont pas similaires ou n'ont pas été saisi";
$ok=false;
        }
        if($_GET['genre']==""){
echo "Le champ genre n’a pas été saisi</br>";
$ok=false;
}
            if($_GET['voie']==""){
echo "Le champ n° de voie n’a pas été saisi</br>";
$ok=false;
} 
        if($_GET['adr']==""){
echo "Le champ adresse n’a pas été saisi</br>";
$ok=false;
}
        if($_GET['cadr']==""){
echo "Le champ complément d'adresse n’a pas été saisi</br>";
$ok=false;
}
        if($_GET['cp']==""){
echo "Le champ code postal n’a pas été saisi</br>";
$ok=false;
}

    if ($ok==false ){
        
        echo"<meta http-equiv='refresh'content='0;URL=PageInscription.html'>";
    }      
            

      else{
       
       enregistrer($nom,$prenom,$tel,$mail,$mdp1,$genre,$voie,$adr,$cadr,$cp);
    echo "<meta http-equiv='refresh'content='0;URL=PageAccueil.html'>";
      }

        

        



        

        ?>
        
        
          

    </body>
</html>
