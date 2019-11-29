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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="application/javascript" src="../scripts/header.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>

    <!-- Code goes here -->
    <header class="header">
	<button type="button" id="menu" class="header__inputMenu">
		<img class="header__logoSearch" id="menu-cross" src="../assets/images/header-cross.svg" alt="Logo">
		<br/>Menu
	</button>

	<a href="./index.php" class="header__logo">
		<img class="header__logoImg" src="../assets/images/logocancer.svg" alt="Logo">
	</a>
	<button type="button" class="header__inputSearch">
		<img class="header__logoSearch" src="../assets/images/search.png" alt="Logo">
	</button>
	<ul class="header__menu">
		<li><a href="./index.php">Accueil</a></li>
		<li><a href="#about">À propos de nous</a></li>
		<li><a href="./forum.php">Forum</a></li>
		<li><a href="#">Sondages</a></li>
		<li><a href="./ressources.php">Ressources</a></li>
		<li><a href="#">Contact</a></li>
		<li class="header__menuSpan"><a href="#">Se connecter</a></li>
		<li class="header__menuSpan header__menuSpan2"><a href="#" class="header__menuSpan--Inscription">S'inscrire</a>
		</li>
	</ul>
</header>

    <section class="articles">
        <br>
        <br />
        <h1 class="articles_title">Ressources</h1>
        <p class="ressources-description">
            Restez informé sur les enjeux actuels du
            cancer grâce à notre documentation variée
            et fiable.
        </p>
        <br>
        <br />
        <br>
        <br />
        <div class="row right">
            <a href="#" class="filtre">Filtres<img src="../assets/images/filtrer.png/" alt="filtrage" width="16"></a>
        </div>
        <br>
        <br />
        <div class="background-articles">
            <a href="./articles.php">
                <div class="row">
                    <div class="col s5">
                        <img src="../assets/images/image-article3.png" alt="image article premier" width="128"
                            height="127">
                        <br>
                        <br />
                        <p class="date_articles">Le 12/04/19</p>
                    </div>
                    <div class="col s7">
                        <h3 class="article-titre">
                            <b>WEBINAR : Les impacts
                                psychologique du cancer</b>
                        </h3>
                        <p class="date-article">
                            Dr Jonh Smith vous explique
                            tous les impacts possibles
                            sur la santé mentale des gens
                            atteint du cancer mais aussi
                            de leur proche
                        </p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s4">
                        <div class="hastag-aidant">
                            <button class="index__tag1bis">#aidant</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-patient">
                            <button class="index__tag2bis">#patient</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-vie-active">
                            <button class="index__tag3bis">#psychologie</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="background-articles">
            <a href="./articles.php">
                <div class="row">
                    <div class="col s5">
                        <img src="../assets/images/image-article4.png" alt="image article second" width="128"
                            height="127">
                        <br>
                        <br />
                        <p class="date_articles">Le 12/04/19</p>
                    </div>
                    <div class="col s7">
                        <h3 class="article-titre">
                            <b>TÉMOIGNAGE : La prise en
                                charge personnalisé</b>
                        </h3>
                        <p class="date-article">
                            Michel Berthoud, 47 ans
                            (accompagné de son épouse
                            Florence). Cancer de
                            l’estomac diagnostiqué en
                            mars 2014. En rémission
                            depuis août 2017.
                        </p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s4">
                        <div class="hastag-aidant">
                            <button class="index__tag1bis">#aidant</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-patient">
                            <button class="index__tag2bis">#patient</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-vie-active">
                            <button class="index__tag3bis">#remission</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="background-articles">
            <a href="./articles.php">
                <div class="row">
                    <div class="col s5">
                        <img src="../assets/images/image-article5.png" alt="image article premier" width="128"
                            height="127">
                        <br>
                        <br />
                        <p class="date_articles">Le 12/04/19</p>
                    </div>
                    <div class="col s7">
                        <h3 class="article-titre">
                            <b>ARTICLE : Après le cancer,
                                la précarité</b>
                        </h3>
                        <p class="date-article">
                            Pour de nombreux malades,
                            cancer va avec
                            appauvrissement. La
                            maladie s’accompagne
                            souvent de baisses de revenus
                            conséquentes, jusqu’à ne plus
                            pouvoir se nourrir ou payer
                            les factures du quotidien.
                        </p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s4">
                        <div class="hastag-aidant">
                            <button class="index__tag1bis">#aidant</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-patient">
                            <button class="index__tag2bis">#patient</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-vie-active">
                            <button class="index__tag3bis">#vie-active</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="background-articles">
            <a href="./articles.php">
                <div class="row">
                    <div class="col s5">
                        <img src="../assets/images/image-article6.png" alt="image article second" width="128"
                            height="127">
                        <br>
                        <br />
                        <p class="date_articles">Le 12/04/19</p>
                    </div>
                    <div class="col s7">
                        <h3 class="article-titre">
                            <b>NEWSLETTER : Les soins de
                                support</b>
                        </h3>
                        <p class="date-article">
                            Une vision plus complète des
                            soins de support. Mais aussi
                            appréhender le sujet du point
                            de vue du praticien qui délivre
                            le soin. Nous avons interviewé
                            Laurence Bosi, art-thérapeute
                            et fondatrice de l’association
                            Médecins de l’Imaginaire.
                        </p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s4">
                        <div class="hastag-aidant">
                            <button class="index__tag1ter">#praticien</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-patient">
                            <button class="index__tag2bis">#patient</button>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="hastag-vie-active">
                            <button class="index__tag3bis">#soins</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row center">
            <a href="#">voir la suite</a>
        </div>
    </section>
    <br>
    <br />
    <br>
    <br />
    <br>
    <br />
    <footer class="index-footer">
	<ul>
		<li><a href="./index.php">A Propos</a></li>
		<li><a href="./ressources.php">A Ressources</a></li>
		<li><a href="./forum.php">Forum</a></li>
		<li class="index-footer__menuSpan"><a href="#">FAIRE UN DON</a></li>
		<li class="index-footer__menuSpan index-footer__menuSpan2"><a href="#">S'INSCRIRE À LA NEWSLETTER</a></li>
		<li class="index-footer__follow">
			<p>Suivez-nous</p>
			<nav class="index-footer__container">
				<a href="#"><img src="../assets/images/twitter.svg"></a>
				<a href="#"><img src="../assets/images/facebook.svg"></a>
				<a href="#"><img src="../assets/images/linkedin.svg"></a>
				<a href="#"><img src="../assets/images/pinterest.svg"></a>
			</nav>

			<nav class="index-footer__container">
				<a href="#">Conditions <br/>générales</a>
				<img src="../assets/images/footer-line.svg" alt="">
				<a href="#">Mentions légales</a>
				<img src="../assets/images/footer-line.svg" alt="">
				<a href="#">Contact</a>
			</nav>

			<p class="index-footer__center">Copyright © Cancer Contribution : construire ensemble les pratiques de
				demain – Thème Glob par FameThemes</p>
		</li>
	</ul>
</footer>
    <!-- Code ends here -->
    <script src="./scripts/index.js"></script>
</body>

</html>