<!DOCTYPE html>

<html>

<head>
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
    $sql = "SELECT  INTO UTILISATEUR(nom,prénom,tel,email,motdepasse,sexe,num_voie,nom_voie,complement_adr,code_postal) VALUES('".$nom."','".$prenom."',".$tel.",'".$mail."','".$mdp1."','".$genre."',".$voie.",'".$adr."','".$cadr."',".$cp.")";
    
        echo "req ".$sql."<br>";
    
    $ok=true;
    if($_GET['mail']==""){
echo "Le champ email n’a pas été saisi</br>";
$ok=false;
}
    if($_GET['mdp1']!= $_GET['mdp2'] or $_GET['mdp1']=="" or $_GET['mdp2']==""){
echo "Les mots de passe ne sont pas similaires ou n'ont pas été saisi";
$ok=false;
        }
    if ($ok==false ){
        
        echo"<meta http-equiv='refresh'content='2;URL=PageConnexion.php'>";
    }      
            

      else{
       
       
    echo "<meta http-equiv='refresh'content='2;URL=PageAccueil.html'>";
      }

    
?>


    
	<meta charset="UTF-8">
   <title>Connexion</title>
	<link rel="stylesheet" href="inscription.css" type="text/css" media="screen" />

</head>
  
<body>

	<h2> <a href="PageAccueil.html"> Accueil</a> </h2>

	<div id="connexion">  
  	<form method="post" action="traitement.php">
       
  	<p> Identifiant : <br/>
  	<input type="text" name="Identifiant" placeholder="Ex: dubois.philippe" /> <br/> </p>
  	<p>Mot de passe : <br/>
  	<input type="passeword" name="Mdp" placeholder="Ex: licorne34110" /> <br/> </p>
  
  	<form action="#">
  
  	<button type="button">Connexion</button> <br/>
  
  	<p>Mot de passe oublié ? <br/>
  	<a href= "MotDePasse.html">Cliquez ici</a> <br/> </p>
          
  	<a href= "PageInscription.html">S'inscrire</a><br/>
          
  	</form>
  
  	</form>

	</div>
	
</body>

</html>