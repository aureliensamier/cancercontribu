<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Food'n'Me</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="../styles/styles.css" rel="stylesheet"/>
	<link href="../styles/reset.css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> <!-- Implanter le jquery-->
	<link rel="shortcut icon" type="image/png" href="../assets/images/favIcon.jpg"/>
</head>
<body class="connexion">

<?php

// Appel du tableau $_SESSION
include("../include/config.inc.php");
session_start();








// Cas d'un utilisateur ayant voulu afficher une page privée sans connexion

if (isset($_GET["pirate"]))
{
    echo("<p>Bien essayé mais il faut se connecter... :-)</p>");
}














// Déconnexion

if (isset($_GET["logout"]))
{
    unset($_SESSION["admin"]);

    // On peut également utiliser session_destroy()

    echo("<p class='connexion__erreur'>Vous avez bien été déconnecté</p>");
}





















// Traitement

if (!empty($_POST))
{
    // Récupération des données de formulaires



    function change($string)
    {
        return(str_replace("'","\'",strip_tags($string)));
    }

    $mail = change($_POST["mail"]);
    $password = change($_POST["password"]);

    $sql_admin = "SELECT * FROM admin WHERE admin_mail='".$mail."' AND admin_password='".$password."'";
    $query_admin = mysqli_query($lien, $sql_admin);
    $result_admin = mysqli_fetch_assoc($query_admin);

    // Limite de l'exercice : un seul compte est valable

    if ($result_admin['id_admin']=="")
    {
        echo("<p class='connexion__erreur'>Erreur d'authentification !</p>");

    }

    // L'utilisateur existe

    else
    {
        // Création d'une variable session

        $_SESSION["admin"] = $mail;

        // Redirection vers la page d'accueil privée

        header("location:home.php");
    }
}





// Formulaire HTML en méthode POST qui renvoie vers la même page

?>
<form method="post" action="index.php" class="connexion__formulaire">
	<h2 class="article__h2">Réservation</h2>
	<input name="mail" class="article__input" type="email" placeholder="Adresse mail" required>
	<input name="password"  class="article__input" type="password" placeholder="Mot de passe" required>
	<input name="submit" class="article__input article__submit" type="submit" value="Connexion">
</form>
</body>
</html>