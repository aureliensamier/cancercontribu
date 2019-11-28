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
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
			<br>
			<br>
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
		<img src="../assets/images/art-schema.png/" alt="diagramme articles" width="375" height="230">
		<p class="articles_premier">
		Bien que le cancer fasse partie des pathologies
		bénéficiant de l’ALD (Affection Longue Durée),
		avec une prise en charge totale, hors
		dépassement d’honoraires, un grand nombre des
		patients en activité lorsqu’ils sont diagnostiqués
		subissent une perte significative de revenus due
		aux arrêts de travail répétés et basculent
		inéluctablement vers la précarité.
		<br>
		<br>
		Au-delà des frais liés à la maladie non
		remboursés ou remboursés partiellement
		(prothèses capillaires, prothèses mammaires
		temporaires ou franchises médicales par
		exemple), ce sont les dépenses courantes
		inhérentes à la vie quotidienne qui posent
		problème : alimentation, électricité, gaz, loyer,
		aides ménagères, assistantes maternelles…
		<br>
		<br>
		Vient ensuite l’imbroglio administratif relatif
		à l’emploi ou aux assurances et aux retard de
		paiement consécutifs.
		<br>
		<br>
		<br>
		Souvent dépassées par l’ampleur, la complexité
		et la lourdeur des démarches, les assistantes
		sociales trouvent un relais proactif auprès
		d’associations capables de réagir avec acuité à ces
		situations d’urgence. A leur demande et dans le
		cas de situations complexes, l’association Juris
		Santé, spécialisée dans l’accompagnement
		juridique personnalisé des patients et proches
		aidants, vient à l’appui de leur mission.
		<br>
		<br>
		</p>
		<div class="row end">
			<div class="col s6">
				<div class="hastag-aidant">
					<a href="#">#aidant</a>
				</div>
			</div>
			<div class="col s6">
				<div class="hastag-patient">
					<a href="#">#patient</a>
				</div>
			</div>
		</div>
		<div class="row end">
			<div class="col s12">
				<div class="hastag-vie-active">
					<a href="#">#vie-active</a>
				</div>
			</div>
		</div>
		<div class="background-sociaux">
			<div class="row center">
				<div class="col s6">
					<a href="#">20<img src="../assets/images/bulle-articles.png/" alt="bulle discussion" width="20.82" height="18.26"></a>
				</div>
				<div class="col s6">
					<a href="#">1000<img src="../assets/images/partage-articles.png/" alt="partage" width="11.69" height="15.46"></a>
				</div>
			</div>
			<div class="row center">
				<div class="col s6">
					<p>commentaires</p>
				</div>
				<div class="col s6">
					<p>partages</p>
				</div>
			</div>
			<br>
			<div class="row center">
				<div class="col s3">
					<a href="#"><img src="../assets/images/logo-twitter.png/" alt="logo twitter" width="50" height="50"></a>
				</div>
				<div class="col s3">
					<a href="#"><img src="../assets/images/logo-facebook.png/" alt="logo facebook" width="50" height="50"></a>
				</div>
				<div class="col s3">
					<a href="#"><img src="../assets/images/logo-messenger.png/" alt="logo messenger" width="50" height="50"></a>
				</div>
				<div class="col s3">
					<a href="#"><img src="../assets/images/logo-linkedin.png/" alt="logo linkedin" width="50" height="50"></a>
				</div>
			</div>
		</div>
	</section>
	div

  <!-- Code ends here -->
  <script src="./scripts/index.js"></script>
</body>

</html>

