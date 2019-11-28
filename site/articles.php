<?php

/*include("../include/fonctions.php");

$lien = mysqli_connect($host, $user, $password, $bdd);
mysqli_query($lien, 'set names utf8');
*/ ?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancer Contribution</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
  <!-- Code goes here -->
  <header class="header">
	<a href="" class="logo">CSS Nav</a>
	<input class="menu-btn" type="checkbox" id="menu-btn"/>
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<ul class="menu">
		<li><a href="#work">Accueil</a></li>
		<li><a href="#about">À propos de nous</a></li>
		<li><a href="#careers">Forum</a></li>
		<li><a href="#contact">Sondages</a></li>
		<li><a href="#contact">Ressources</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
	</header>
	<section class="articles">
		<div class="row">
			<div class="col s12">
				<a class="retour"href="../site/index.php">
				<img src="../assets/images/fleche_gauche.png" alt="fleche de retour" width="12" height="21.05">
				Retour
				</a>
			</div>
		</div>
		<div class="articles-intro">
			<h1 class="articles_title">Après le cancer, la précarité</h1>
			<p class="articles_description">
				Pour de nombreux malades, cancer va avec
				appauvrissement. La maladie
				s’accompagne souvent de baisses de
				revenus conséquentes, jusqu’à ne plus
				pouvoir assumer les dépenses du quotidien. 
			</p>
		</div>
		<div class="row">
			<div class="col s4">
				<img src="../assets/images/profil_vierge.png" alt="profil utilisateur">
			</div>
			<div class="col s4">
				<a href="lien_personne">Sylvie Favier</a>
			</div>
			<div class="col s4">
				<p class="date"> - 29 octobre 2017</p>
			</div>

		</div>
	</section>

  <!-- Code ends here -->
  <script src="./scripts/index.js"></script>
</body>

</html>

