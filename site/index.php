<?php

include("../include/fonctions.php");

$lien = mysqli_connect($host, $user, $password, $bdd);
mysqli_query($lien, 'set names utf8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Food'n'Me</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="../styles/styles.css" rel="stylesheet"/>
	<link href="../styles/reset.css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../assets/images/favIcon.jpg"/>
</head>
<body>
<header class="header">
	<a href="javascript:history.go(-1)" class="header__back"><img src="../assets/images/back.png" class="header__back" alt=""></a>
	<a href="./index.php"><img src="../assets/images/logo.png" alt="" class="header__home"></a>
</header>

<section class="index">
	<div class="index__grille">
		<nav class="index__grille--nav"></nav>
		<nav class="index__grille--nav"></nav>
		<nav class="index__grille--nav"></nav>
	</div>

<?php




$categorie = 'select distinct ((id_categorie)), categorie_nom, restaurant_categorie from restaurant, categorie where categorie.id_categorie = restaurant.restaurant_categorie'; // Récupère toutes les catégories
$query = mysqli_query($lien, $categorie);

 while ($result = mysqli_fetch_assoc($query)) // Recupère en block les résulats et les découpent en tableaux associatif petit à petit.
{
    $restaurants = "select * from restaurant where restaurant_categorie='".$result["id_categorie"]."' order by restaurant_nom";
    $query_r = mysqli_query($lien, $restaurants);
	echo ('<div class="index__grandContainer">');
	echo '<button class="index__titreCategorie">' . $result['categorie_nom'] . '</button>';
    echo ('<div class="index__containerOne">');
	echo '<div class="index__container">';

	while ($result_r = mysqli_fetch_assoc($query_r)) // Recupère en block les résulats et les découpent en tableaux associatif petit à petit.
    {
        echo '<a class="index__container--boxRestaurant"  href="article_detail.php?id_restaurant='.$result_r["id_restaurant"].'" style="background-image: url('.$result_r["restaurant_image"].')">';
        echo '<h3 class="index__container__h3Title">' . $result_r['restaurant_nom'] . '</h3>';
        echo '</a>';
    }

    echo ('</div>');
	echo('</div>');
    echo '</div>';
}
?>
</section>
</body>
</html>
