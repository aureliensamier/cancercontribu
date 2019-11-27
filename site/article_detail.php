<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Food'n'Me</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="../styles/styles.css" rel="stylesheet"/>
	<link href="../styles/reset.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/png" href="../assets/images/favIcon.jpg"/>
</head>
<body>

<header class="header">
	<a href="javascript:history.go(-1)" class="header__back"><img src="../assets/images/back.png" class="header__back" alt=""></a>
	<a href="./index.php"><img src="../assets/images/logo.png" alt="" class="header__home"></a>
</header>
<?php
include("../include/fonctions.php");

$sql = "select * from restaurant where id_restaurant='".change($_GET["id_restaurant"])."'";
$query = mysqli_query($lien,$sql);
if (!mysqli_num_rows($query))
{
    header("location:home.php");
}
$result = mysqli_fetch_assoc($query);
echo ('<section class="article">'); //DESCRIPTION
echo '<div class="article__sectionImg" style="width: 100%; height: 400px; background-image: url('.$result["restaurant_image"].')"></div>'; //Image


echo ('<div class="article__description">'); //Informations
echo ('<h1 class="article__title">'.$result["restaurant_nom"].'</h1>');
echo ('<p class="article__text">'.$result["restaurant_description"].'</p><br/><br/>');
echo ('<p class="article__adresse"><span class="article__bold">Adresse : </span>'.$result["restaurant_adresse"]." ".$result["restaurant_code_postal"]." ".$result["restaurant_ville"].'</p><br/>');
echo ('<p class="article__money"><span class="article__bold">Fourchette de prix : </span>'.$result["restaurant_prix_min"]."€ - ".$result["restaurant_prix_max"].'€</p><br/>');
echo ('<p class="article__money"><span class="article__bold">Téléphone : </span>'.$result["restaurant_telephone"].'</p>');

echo('<a href=\"home.php\" class="article__back">Retour à la liste des articles</a>');
echo ('</div>');




echo ('<div class="article__formulaire">'); // FORMULAIRE
echo ('<h2 class="article__h2">Réservation</h2>');
echo ('<form method="post">');
echo ('<input name="first-name"  class="article__input" type="text" placeholder="Prénom">');
echo ('<input name="last-name" class="article__input" type="text" placeholder="Nom de famille">');
echo ('<input name="mail" class="article__input" type="email" placeholder="Adresse mail">');
echo ('<input name="phone" class="article__input" type="tel" placeholder="Téléphone">');
echo ('<input name="date" class="article__input" type="date">');
echo ('<input name="time" class="article__input" type="time" value="20:00">');
echo ('<input name="submit" class="article__input article__submit" type="submit" value="Je réserve !">');
echo ('</form>');


echo('</div>');
echo('</section>');


if(isset($_POST["submit"]))
{
    // Insertion
    $prenom = $_POST["first-name"];
    $nom = $_POST["last-name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $heure = $_POST["time"];
    $idRestaurant = $_GET["id_restaurant"];

    $query_reservation = 'INSERT INTO visiteur(visiteur_prenom,visiteur_nom,visiteur_mail,visiteur_tel,visiteur_date,visiteur_heure,visiteur_restaurant)VALUES ( "'.$prenom.'","'.$nom.'","'.$mail.'","'.$phone.'","'.$date.'","'.$heure.'","'.$idRestaurant.'")';
    $query_reservation = mysqli_query($lien, $query_reservation);

}
?>
</body>
</html>