<!DOCTYPE html>
<html>
<head>
	<title>Statistiques</title>


	
	 <meta charset="UTF-8">
	<link rel="stylesheet" href="../quartiers.css" type="text/css" media="screen" />
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<style>
		canvas {
    display: block;
    max-width: 800px;
    margin: 60px auto;
}
	</style>
</head>
<body>

		<header>
            <h1> <img id="logo" src="../logo.png"></h1>
        </header>

		<nav>
           
            <ul class="menu" align="center">
                <li ><a href="PageAccueil.php" class="homeIcon">Accueil</a></li>
                <li ><a href="PageInscription.php">S'inscrire</a></li>
                <li ><a href="PageConnexion.php">Se connecter</a></li>
                <li ><a href="PageContact.php">Contact</a></li>
                
            </ul>

        </nav>


<h3>NOMBRE DE COMMERCES DANS LES QUARTIERS</h3>

	<canvas id="commerces" ></canvas>

<script>

Chart.defaults.global.elements.rectangle.backgroundColor = '#FF0000';

var bar_ctx = document.getElementById('commerces').getContext('2d');

var couleur = bar_ctx.createLinearGradient(0, 0, 0, 600);
couleur.addColorStop(0, 'orange');


var bar_chart = new Chart(bar_ctx, {
    type: 'bar',
    data: {
        labels: ["Centre", "Hopitaux-Facultés", "Port marianne", "Près d'arènes", "Croix d'argent","Mosson", "Cevennes"],
        datasets: [{
            label: 'Nombre de commerces dans les quartiers de Montpellier',
            data: [600, 288, 216, 144, 312, 216,336],
                        backgroundColor: couleur,
                        hoverBackgroundColor: couleur,
                        hoverBorderWidth: 5,
                        hoverBorderColor: 'black'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});





</script>

<h3>NOMBRE DE LOISIRS DANS LES QUARTIERS</h3>
<canvas id="loisirs" ></canvas>

<script>

Chart.defaults.global.elements.rectangle.backgroundColor = '#FF0000';

var bar_ctx = document.getElementById('loisirs').getContext('2d');

var couleur = bar_ctx.createLinearGradient(0, 0, 0, 600);
couleur.addColorStop(0, 'orange');


var bar_chart = new Chart(bar_ctx, {
    type: 'bar',
    data: {
        labels: ["Centre", "Hopitaux-Facultés", "Port marianne", "Près d'arènes", "Croix d'argent","Mosson", "Cevennes"],
        datasets: [{
            label: 'Nombre de loisirs dans les quartiers de Montpellier',
            data: [550,264, 198, 132, 286, 198, 308],
                        backgroundColor: couleur,
                        hoverBackgroundColor: couleur,
                        hoverBorderWidth: 5,
                        hoverBorderColor: 'black'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});





</script>

<h3>NOMBRE D'ÉTABLISSEMENTS SCOLAIRES DANS LES QUARTIERS</h3>
<canvas id="ecole" ></canvas>

<script>

Chart.defaults.global.elements.rectangle.backgroundColor = '#FF0000';

var bar_ctx = document.getElementById('ecole').getContext('2d');

var couleur = bar_ctx.createLinearGradient(0, 0, 0, 600);
couleur.addColorStop(0, 'orange');


var bar_chart = new Chart(bar_ctx, {
    type: 'bar',
    data: {
        labels: ["Centre", "Hopitaux-Facultés", "Port marianne", "Près d'arènes", "Croix d'argent","Mosson", "Cevennes"],
        datasets: [{
            label: 'Nombre d établissements scolaires dans les quartiers de Montpellier',
                        data: [750, 360, 270, 180, 390, 270,420],
                        backgroundColor: couleur,
                        hoverBackgroundColor: couleur,
                        hoverBorderWidth: 5,
                        hoverBorderColor: 'black'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});





</script>


</body>
</html>