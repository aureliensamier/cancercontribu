<?php

include("../include/fonctions.php");

$lien = mysqli_connect($host, $user, $password, $bdd);
mysqli_query($lien, 'set names utf8');
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150990567-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-150990567-1');
	</script>
	<title>Cancer Contribution</title>
	<link rel="stylesheet" href="./styles/styles.scss">
	<noscript>
		<link rel="stylesheet" href="./styles/styles.scss" /></noscript>


	<!-- Referencement -->
	<meta name="description" content="Cancer Contribution : Construire ensemble les pratiques de demain">
	<meta name="keywords" content="Cancer Contribution : Construire ensemble les pratiques de demain">
	<meta name="author" content="Aurélien SAMIER">
	<meta name="robots" content="index">
	<meta name="Indentifier-URL" content="https://www.cancercontribution.fr/">
	<!-- END Référencement -->


	<!-- Open Graph-->
	<meta property="og:title" content="Cancer Contribution | Construire ensemble les pratiques de demain">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.cancercontribution.fr/">
	<meta property="og:image" content="./images/logo-vectoriser-cancer.png">
	<meta property="og:site_name" content="Cancer Contribution | Construire ensemble les pratiques de demain">
	<meta property="og:description" content="Cancer Contribution : Construire ensemble les pratiques de demain">
	<!-- END Open Graph-->

	<!-- Twitter Cards-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="https://www.cancercontribution.fr/" />
	<meta name="twitter:title" content="Cancer Contribution | Construire ensemble les pratiques de demain" />
	<meta name="twitter:description" content="Cancer Contribution : Construire ensemble les pratiques de demain" />
	<meta name="twitter:image" content="./images/logo-vectoriser-cancer.png">
	<!-- END Twitter Cards-->
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
	<!-- Code goes here -->

	<div class="row center">
		<div class="col s12 col m12 col l3">
			<a href="/index.html/">Accueil</a>
		</div>
		<div class="col s12 col m12 col l3">
			<a href="/ressources.html/">Ressources</a>
		</div>
		<div class="col s12 col m12 col l3">
			<a href="/articles.html/">Articles</a>
		</div>
		<div class="col s12 col m12 col l3">
			<a href="/forum.html/">Forum</a>
		</div>
	</div>

	<!-- Code ends here -->
	<script src="./scripts/index.js"></script>
</body>

</html>