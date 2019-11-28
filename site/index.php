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
    <title>Cancer Contribution</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/reset.css">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <!-- Code goes here -->

    <div class="row center">


        <div class="container">
            <div class="header">
                <div class="row center">
                    <div class="col s4">
                        <img src="../assets/images/menu.png" alt="icon menu" width="37" height="38">
                    </div>
                    <div class="col s4">
                        <img src="../assets/images/logocancer.png/" alt="logo cancer contribu" width="96"
                            height="37.44">
                    </div>
                    <div class="col s4">
                        <img src="../assets/images/search.png" alt="icon search" width="24" height="24.01">
                    </div>
                </div>
            </div>
            <div class="introduction">
                <h1 class="title">La plateforme
                    collaborative pour
                    lutter contre le
                    cancer
                </h1>

                <p class="description-intro">Rejoignez notre communauté et alimentez
                    le débat pour que, tous ensemble, nous
                    puissions améliorer le système de santé. </p>
                <div class="content-video">
                    <img src="../assets/images/image_intro_landing.png" alt="video presentation" width="327"
                        height="208">
				</div>
				<div class="content-video">
                    <img src="../assets/images/image-slider-landing.png" alt="slider" width="352"
                        height="256">
				</div>
				<div class="row center">
                    <a href="#" class="bouton-plus">
							<p class="bouton-plus-texte">En savoir plus</p>
					</a>
				</div>

            </div>
            <div class="forum">
				<h2 class="subtitle">Forum
					</h2>

					<p class="description-forum">Découvrez notre forum, un lieu ou chacun 
peut contribuer au débat et aider à apporter 
des solutions basé sur leur expertise </p>

			<div class="row center">
				<div class="col s4">
					
				</div>
				<div class="col s4">
					
				</div>
				<div class="col s4">
				
				</div>
			</div>

			</div>
            <div class="partenariat"></div>
            <div class="footer"></div>

        </div>

        <!-- Code ends here -->
        <script src="./scripts/index.js"></script>
</body>

</html>
