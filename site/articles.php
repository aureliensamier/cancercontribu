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
		<li><a href="./forum.html">Forum</a></li>
		<li><a href="#">Sondages</a></li>
		<li><a href="./ressources.php">Ressources</a></li>
		<li><a href="#">Contact</a></li>
		<li class="header__menuSpan"><a href="#">Se connecter</a></li>
		<li class="header__menuSpan header__menuSpan2"><a href="#" class="header__menuSpan--Inscription">S'inscrire</a>
		</li>
	</ul>
</header>
    <section class="articles">

        <div class="row">
            <div class="col s12">
                <div class="retour">
                    <a class="retour" href="../site/ressources.php">
                        <img src="../assets/images/fleche_gauche.png" alt="fleche de retour" width="16" height="26.05">
                        <div class="retour-style">Retour</div>
                    </a>
                </div>
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
            <br />
        </div>
        <div class="row">
            <div class="col s1">
                <img src="../assets/images/profil_vierge.png" alt="profil utilisateur">
            </div>
            <div class="col s4">
                <div class="lien_personne">
                    <b class="lien_personne">Sylvie Favier</b>
                </div>
            </div>
            <div class="col s5">
                <p class="date">- 29 octobre 2017</p>
            </div>
            <div class="col s2"></div>
        </div>
        <img src="../assets/images/art-schema.png" alt="diagramme articles" width="375" height="230">
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
            <br />
            Au-delà des frais liés à la maladie non
            remboursés ou remboursés partiellement
            (prothèses capillaires, prothèses mammaires
            temporaires ou franchises médicales par
            exemple), ce sont les dépenses courantes
            inhérentes à la vie quotidienne qui posent
            problème : alimentation, électricité, gaz, loyer,
            aides ménagères, assistantes maternelles…
            <br>
            <br />
            Vient ensuite l’imbroglio administratif relatif
            à l’emploi ou aux assurances et aux retard de
            paiement consécutifs.
            <br>
            <br />
            <br>
            <br />
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
            <br />
        </p>
        <div class="row right">
            <div class="col s6">
                <div class="hastag-aidant">
                    <button class="index__tag1">#aidant</button>
                </div>
            </div>
            <div class="col s6">
                <div class="hastag-patient">
                    <button class="index__tag2">#patient</button>
                </div>
            </div>
        </div>
        <br>
        <br />
        <div class="row right ">
            <div class="col s12">
                <div class="hastag-vie-active">
                    <button class="index__tag3">#vie-active</button>
                </div>
            </div>
        </div>
        <br>
        <br />
        <br>
        <br />
        <br>
        <br />
        <div class="background-sociaux">
            <div class="row center">
                <div class="col s6">
                    <a href="#"><b class="sociaux-color">20</b><img src="../assets/images/bulle-articles.png"
                            alt="bulle discussion" width="20.82" height="18.26"></a>
                </div>
                <div class="col s6">
                    <a href="#"><b class="sociaux-color">1000</b><img src="../assets/images/partage-articles.png"
                            alt="partage" width="11.69" height="15.46"></a>
                </div>
            </div>
            <div class="row center">
                <div class="col s6">
                    <p class="sociaux-color">commentaires</p>
                </div>
                <div class="col s6">
                    <p class="sociaux-color">partages</p>
                </div>
            </div>
            <br>
            <br />
            <div class="row center">
                <div class="col s3">
                    <a href="#"><img src="../assets/images/logo-twitter.png" alt="logo twitter" width="50"
                            height="50"></a>
                </div>
                <div class="col s3">
                    <a href="#"><img src="../assets/images/logo-facebook.png" alt="logo facebook" width="50"
                            height="50"></a>
                </div>
                <div class="col s3">
                    <a href="#"><img src="../assets/images/logo-messenger.png" alt="logo messenger" width="50"
                            height="50"></a>
                </div>
                <div class="col s3">
                    <a href="#"><img src="../assets/images/logo-linkedin.png" alt="logo linkedin" width="50"
                            height="50"></a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br />
    <br>
    <br />
    <div class="background-debat">
        <h2 class="debat">Débats sur ce thème</h2>
    </div>
    <section class="articles">
        <a href="#">
            Les aides sont-elles suffisantes pour
            financer ses soins ?
        </a>
        <br>
        <br />
        <a href="#">
            Cancer et Travail
        </a>
    </section>
    <div class="background-debat">
        <h2 class="debat">A lire aussi</h2>
    </div>
    <section class="articles">
        <div class="background-articles">
            <div class="row">
                <div class="col s5">
                    <img src="../assets/images/image-article1.png" alt="image article premier" width="128" height="127">
                    <br>
                    <br />
                    <p class="date_articles">Le 12/04/19</p>
                </div>
                <div class="col s7">
                    <h3 class="article-titre">
                        <b>ARTICLE : Travailler malgré
                            le cancer</b>
                    </h3>
                    <p class="date-article">
                        De plus en plus de personnes
                        vivent avec et après un cancer.
                        Parmi elles, nombreuses sont
                        celles qui sont en activité au
                        moment du diagnostic.
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
        </div>
        <div class="background-articles">
            <div class="row">
                <div class="col s5">
                    <img src="../assets/images/image-article2.png" alt="image article second" width="128" height="127">
                    <br>
                    <br />
                    <p class="date_articles">Le 12/04/19</p>
                </div>
                <div class="col s7">
                    <h3 class="article-titre">
                        <b>ARTICLE : Les aidants
                            salariés</b>
                    </h3>
                    <p class="date-article">
                        Face au nombre grandissant
                        d’aidants qui occupent un
                        emplois, quelles réponses
                        peut-on apporter à la contrainte
                        temporelle, sans nuire à la
                        continuité des carrières et
                        des liens sociaux ?
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
        </div>
        <br>
        <br />
        <br>
        <br />
        <div class="row center">
            <div class="col s6">
                <a href="#"><img src="../assets/images/bulle-articles2.png" alt="bulle discussion" width="38.11"
                        height="28.9"><b class="com-20">20 commentaires</b></a>
            </div>
        </div>
        <hr class="barre">
        <div class="row right">
            <p class="date-com">25/09/19</p>
        </div>
        <br>
        <br />
        <div class="row">
            <div class="col s2">
                <img src="../assets/images/persona-com1.png" alt="persona commentaire premier" width="40" height="56">
            </div>
            <div class="col s2">
                <b class="pseudo-com">Lili G</b>
                <p class="statut-com">Aidant</p>
            </div>
            <div class="col s8"></div>
        </div>
        <div class="background-com">
            <p class="com">
                A ce sujet 2 études interessantes: l’une
                americaine et l’autre chinoise qui montrent
                toutes les deux que dans le cancer du sein
                l’échographie est plus efficace que la
                mammographie chez les femmes jeunes …
            </p>
            <br>
            <br />
            <div class="row left">
                <p class="chiffre-like"><b class="like-com">12</b></p> <img src="../assets/images/pouce.png"
                    alt="pouce j'aime" width="17.66" height="18.52">
            </div>
            <div class="row right">
                <a href="#">Lire plus</a>
            </div>
            <br>
            <br />
            <br>
            <br />
            <div class="row center">
                <div class="col s6">
                    <img src="../assets/images/repondre.png" alt="bouton repondre" width="146" height="40">
                </div>
                <div class="col s6">
                    <img src="../assets/images/signaler.png" alt="bouton signaler" width="146" height="40">
                </div>
            </div>
        </div>
        <hr class="barre">
        <div class="row right">
            <p class="date-com">25/09/19</p>
        </div>
        <br>
        <br />
        <div class="row">
            <div class="col s2">
                <img src="../assets/images/persona-com2.png" alt="persona commentaire second" width="40" height="56">
            </div>
            <div class="col s2">
                <b class="pseudo-com">Margot R</b>
                <p class="statut-com">Patient</p>
            </div>
            <div class="col s8"></div>
        </div>
        <div class="background-com">
            <p class="com">
                Merci de votre réponse, je n’avais pas pris
                connaissance que ce genre d’étude avait
                été mené. Est ce qu’elles ont étaient mené
                par des organismes capable de pousser
                nos méthodes d’examen a évolué ?
            </p>
            <br>
            <br />
            <div class="row left">
                <p class="chiffre-like"><b class="like-com">3</b></p> <img src="../assets/images/pouce.png"
                    alt="pouce j'aime" width="17.66" height="18.52">
            </div>
            <br>
            <br />
            <br>
            <br />
            <div class="row center">
                <div class="col s6">
                    <img src="../assets/images/repondre.png" alt="bouton repondre" width="146" height="40">
                </div>
                <div class="col s6">
                    <img src="../assets/images/signaler.png" alt="bouton signaler" width="146" height="40">
                </div>
            </div>
        </div>
        <hr class="barre">
        <div class="row right">
            <p class="date-com">25/09/19</p>
        </div>
        <br>
        <br />
        <div class="row">
            <div class="col s2">
                <img src="../assets/images/persona-com3.png" alt="persona commentaire troisième" width="40"
                    height="56">
            </div>
            <div class="col s2">
                <b class="pseudo-com">Dr John Smith</b>
                <p class="statut-com">Oncologue<img src="../assets/images/valide.png" alt="validé" width="16"
                        height="15.36"></p>

            </div>
            <div class="col s8"></div>
        </div>
        <div class="background-com">
            <p class="com">
                Elles ont été effectués par des organismes
                sérieux mais elles sont encore assez jeune
                et beaucoup de paramètre son encore à
                penser et tester avant de vraiment mettre
                en place un changement de procédure.
            </p>
            <br>
            <br />
            <div class="row left">
                <p class="chiffre-like"><b class="like-com">4</b></p> <img src="../assets/images/pouce.png"
                    alt="pouce j'aime" width="17.66" height="18.52">
            </div>
            <br>
            <br />
            <br>
            <br />
            <div class="row center">
                <div class="col s6">
                    <img src="../assets/images/repondre.png" alt="bouton repondre" width="146" height="40">
                </div>
                <div class="col s6">
                    <img src="../assets/images/signaler.png" alt="bouton signaler" width="146" height="40">
                </div>
            </div>
        </div>
        <br>
        <br />
        <hr class="barre">
        <br>
        <br />
        <br>
        <br />
        <div class="row center">
            <img src="../assets/images/plusdecom.png" alt=" boutton plus de com" width="194" height="40">
        </div>
        <div class="row center">
            <img src="../assets/images/retour-ressources.png" alt="voutton retour ressources" width="194qq"
                height="40">
        </div>
    </section>

<footer class="index-footer">
	<ul>
		<li><a href="./index.php">A Propos</a></li>
		<li><a href="./ressources.php">A Ressources</a></li>
		<li><a href="./forum.html">Forum</a></li>
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
				<a href="#">Conditions générales</a>
				<img src="../assets/images/footer-line.svg" alt="">
				<a href="#">Mentions légales</a>
				<img src="../assets/images/footer-line.svg" alt="">
				<a href="#">Contact</a>
			</nav>
<br>
<br/>
			<p class="index-footer__center">Copyright © Cancer Contribution : construire ensemble les pratiques de
				demain – Thème Glob par FameThemes</p>
		</li>
	</ul>
</footer>
</body>

</html>
