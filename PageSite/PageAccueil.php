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
                <li id="home"><a href="#home" class="homeIcon">Accueil</a></li>
                <li id="news"><a href="#news">S'inscrire</a></li>
                <li id="about"><a href="#about">Se connecter</a></li>
                <li id="services"><a href="#services">Contact</a></li>
                
            </ul>

        </nav>


  
  




<p id=theme> Quelles sont vos préférences ?</p>
<?php
$estconnecte=$_SESSION['utilisateurconnecte'];
echo $estconnecte."<br>";
?>





<a class="images" href="PageCommerces.php"> <img src="Images/commerces.jpg" width="300px"  border="3" style="border-color: black;" > </a> <br>
<a class="images" href="PageEtablissementsScolaires.php"> <img src="Images/enseignement.jpg" width="300px" border="3" style="border-color: black;" > </a> <br>
<a class="images" href="PageLoisirs.php"> <img src="Images/loisirs.jpg" width="300px" border="3" style="border-color: black;" > </a> <br>
<a class="images" href="PageQuartiers.php"> <img src="Images/quartiers.jpg" width="300px" border="3" style="border-color: black;" > </a> <br>









  </body>
  </html>
