<?php
/*
include("../include/fonctions.php");

$lien = mysqli_connect($host, $user, $password, $bdd);
mysqli_query($lien, 'set names utf8');*/
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancer Contribution</title>
    <link rel="stylesheet" href="../styles/styles.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="application/javascript" src="../scripts/header.js"></script>
</head>

<body>
<header class="header">
	<input value="Menu" id="menu" class="header__inputMenu" type="button">
	<a href="./index.php" class="header__logo"><img class="header__logoImg" src="../assets/images/logocancer.svg"
	                                                alt="Logo"></a>
	<button type="button" class="header__inputSearch"><img class="header__logoSearch" src="../assets/images/search.png"
	                                                       alt="Logo"></button>
	<ul class="header__menu">
		<li><a href="./index.php">Accueil</a></li>
		<li><a href="#about">À propos de nous</a></li>
		<li><a href="./forum.php">Forum</a></li>
		<li><a href="#">Sondages</a></li>
		<li><a href="#">Ressources</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#" class="header__menuSpan">Se connecter</a></li>
		<li><a href="#" class="header__menuSpan">S'inscrire</a></li>
	</ul>
</header>

<section class="index">
	<h1 class="index__H1">La plateforme collaborative pour lutter contre le cancer</h1>
	<p class="index__p">Rejoignez notre communauté et alimentez le débat pour que, tous ensemble, nous puissions
		améliorer le système de santé.</p>
	<img src="../assets/images/image_intro_landing.png" alt="Vidéo Landing Page" class="index__video">
	<img src="../assets/images/slide-info.png" alt="Slide Landing Page" class="index__slide">

	<a class="index__Ainfo" href="#"><p>En savoir plus</p></a>

	<h2 class="index__H2">Forum</h2>
	<p class="index__p index__p--center">Rejoignez notre communauté et alimentez le débat pour que, tous ensemble, nous
		puissions améliorer le système de santé.</p>

	<div class="index__debat">
		<h3>Débats Récents</h3>
	</div>

	<div class="index__container">
		<div class="index__containerColumn">
			<p class="index__containerColumn-P">25/10/19</p>
		</div>
		<div class="index__containerColumn">
			<img class="index__containerCol-img" src="../assets/images/index-avatar.png" alt="Avatar">
			<h4>Les gestes de la prévention<br/><span>Sophie S - Infirmière</span><span><img
							class="index__containerCol-check" src="../assets/images/index-check.png" alt="Spécialiste"></span>
			</h4>
		</div>
		<div class="index__containerColumn">
			<button class="index__tag">#patient</button>
			<button class="index__tag">#citoyen</button>
			<button class="index__tag">#généralité</button>
			<button class="index__tag">#prévention</button>
		</div>
		<div class="index__containerColumn">
			<nav class="index__containerLine">
				<p>218<span><img class="index__containerCol-check" src="../assets/images/index-comment.png"
				                 alt="Commentaires" style="transform: translateY(-0.1%)"></span><span
							class="index__containerLine--span"><br/>commentaire</span></p>
			</nav>
			<nav class="index__containerLine2">
				<p>3 heures<span><img class="index__containerCol-check" src="../assets/images/index-time.png"
				                      alt="Commentaires" style="transform: translateY(-0.1%)"></span><span
							class="index__containerLine--span"><br/>depuis le dernier post</span></p>
			</nav>
		</div>
	</div>
	<div class="index__container">
		<div class="index__containerColumn">
			<p class="index__containerColumn-P">25/10/19</p>
		</div>
		<div class="index__containerColumn">
			<img class="index__containerCol-img" src="../assets/images/index-avatar.png" alt="Avatar">
			<h4>Les gestes de la prévention<br/><span>Sophie S - Infirmière</span><span><img
							class="index__containerCol-check" src="../assets/images/index-check.png"></span></h4>
		</div>
		<div class="index__containerColumn">
			<button class="index__tag">#patient</button>
			<button class="index__tag">#citoyen</button>
			<button class="index__tag">#généralité</button>
			<button class="index__tag">#prévention</button>
		</div>
		<div class="index__containerColumn">
			<nav class="index__containerLine">
				<p>218<span><img class="index__containerCol-check" src="../assets/images/index-comment.png"
				                 alt="Commentaires" style="transform: translateY(-0.1%)"></span><span
							class="index__containerLine--span"><br/>commentaire</span></p>
			</nav>
			<nav class="index__containerLine2">
				<p>3 heures<span><img class="index__containerCol-check" src="../assets/images/index-time.png"
				                      alt="Commentaires" style="transform: translateY(-0.1%)"></span><span
							class="index__containerLine--span"><br/>depuis le dernier post</span></p>
			</nav>
		</div>
	</div>
	<div class="index__container">
		<div class="index__containerColumn">
			<p class="index__containerColumn-P">25/10/19</p>
		</div>
		<div class="index__containerColumn">
			<img class="index__containerCol-img" src="../assets/images/index-avatar.png" alt="Avatar">
			<h4>Les gestes de la prévention<br/><span>Sophie S - Infirmière</span><span><img
							class="index__containerCol-check" src="../assets/images/index-check.png"></span></h4>
		</div>
		<div class="index__containerColumn">
			<button class="index__tag">#patient</button>
			<button class="index__tag">#citoyen</button>
			<button class="index__tag">#généralité</button>
			<button class="index__tag">#prévention</button>
		</div>
		<div class="index__containerColumn">
			<nav class="index__containerLine">
				<p>218<span><img class="index__containerCol-check" src="../assets/images/index-comment.png"
				                 alt="Commentaires" style="transform: translateY(-0.1%)"></span><span
							class="index__containerLine--span"><br/>commentaire</span></p>
			</nav>
			<nav class="index__containerLine2">
				<p>3 heures<span><img class="index__containerCol-check" src="../assets/images/index-time.png"
				                      alt="Commentaires" style="transform: translateY(-0.1%)"></span><span
							class="index__containerLine--span"><br/>depuis le dernier post</span></p>
			</nav>
		</div>
	</div>

	<a class="index__Ainfo index__Adisplay" href="#"><p>Afficher plus</p></a>

	<h2 class="index__H2">Partenariat</h2>
	<p class="index__p index__p--center">Des collaborateurs de profils variés afin
		d’apporter une vision globale sur tous les
		aspects à la lutte contre le cancer.</p>

	<img class="index__partenariat" src="../assets/images/index-partenariat.png" alt="" Partenariat>
</section>
</body>

</html>
