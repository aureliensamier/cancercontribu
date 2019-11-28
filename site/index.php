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
</head>

<body>
<header class="header">
	<a href="" class="logo">CSS Nav</a>
	<input class="menu-btn" type="checkbox" id="menu-btn"/>
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<ul class="menu">
		<li><a href="#work">Accueil</a></li>
		<li><a href="#about">À propos de nous</a></li>
		<li><a href="./forum.php">Forum</a></li>
		<li><a href="#">Sondages</a></li>
		<li><a href="#">Ressources</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Se connecter</a></li>
		<li><a href="#">S'inscrire</a></li>
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
		<div class="info__containerColumn1">
			<img class="index__containerCol1-img" src="../assets/images/index-avatar.png" alt="" Avatar>
		</div>
	</div>
</section>
</body>

</html>
