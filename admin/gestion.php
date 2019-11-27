<?php
include("../include/fonctions.php");

// Appel du tableau $_SESSION

session_start();

// Contrôle d'accès

if (!isset($_SESSION["admin"]))
{
    header("location:index.php?pirate");
}
?>

<!DOCTYPE html>
<html lang="en" class="html">
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
<body>
<!-- Ce qui ne marche pas :

Dans le select/option du formulaire d'un admin existant : la catégorie original s'affiche (normal) mais du coup elle est obligatoirement en double (ce que je ne veux pas) car je récupère toutes les catégories
-->
<header class="admin-header">
	<div class="admin-header__profil">
		<img src="../assets/images/logo.png" class="admin-header__logo" alt="">
		<h1 class="admin-header__adminName">Gestion des comptes administrateurs</h1>
		<div class="admin-header__containerButton">
			<a href="./home.php" alt="Gestion comptes administrateur" class="admin-header__gestionAdmin admin-header__gestionAdmin--hover"><img src="../assets/images/restaurant.png" alt="" class="admin-header__img"></a>
			<a href="gestion.php" class=""><img src="../assets/images/add.png" alt="" class="admin-header__img"></a>
		</div>
	</div>

	<div class="admin-header__categories">
		<form method="post">
			<button class="admin-header__cancel" type="submit" name="delete""><img src="../assets/images/delete.png" alt="" class="admin-header__img"></button>
            <?php
            $idAdmin = $_GET['id_admin'];
            $sql_list = "SELECT * FROM admin ORDER BY id_admin DESC";
            $query_list = mysqli_query($lien, $sql_list);
            while ($result_list = mysqli_fetch_assoc($query_list))
            {
                echo ('<a href="./gestion.php?id_admin='.$result_list["id_admin"].'" class="admin-header__list"><span class="admin-header__list--bold">'.$result_list["admin_prenom"].' '.$result_list["admin_nom"].'</span></a>');
            }
            ?>
		</form>
	</div>
	<a class="admin-header__disconnection" href="index.php?logout" alt="Déconnexion">DÉCONNEXION</a>
</header>

<section class="admin backgroundNone">

	<h1 class="admin__title">A modifier</h1>
	<form method="post" class="admin__containerFormulaire">
        <?php
        if (isset($idAdmin)) { // Sélection d'un admin
            $sql_admin="SELECT * FROM admin WHERE id_admin=$idAdmin";
            $query_admin=mysqli_query($lien,$sql_admin);
            while ($result_admin = mysqli_fetch_assoc($query_admin)) {
                $adminPrenom = change($result_admin['admin_prenom']);
                $adminNom = change($result_admin['admin_nom']);
                $adminMail = change($result_admin['admin_mail']);
                $adminPassword = change($result_admin['admin_password']);
            }

            echo ('<input class="admin__button admin__prix" type="text" name="nom"  placeholder="Prénom" required value="'.$adminPrenom.'">');
            echo ('<input class="admin__button admin__prix" type="text" name="prenom"  placeholder="Nom de famille" required value="'.$adminNom.'">');
            echo ('<input class="admin__button" type="text" name="mail"  placeholder="Mail" required value="'.$adminMail.'">');
            echo ('<input class="admin__button" type="password" name="password"  placeholder="Mot de passe (8 caractères minimum)" required  value="'.$adminPassword.'">');

            echo ('<input class="admin__button admin__submit" id="submit" name="submit" type="submit" value="VALIDER">');
            echo ('</form>');

            if (isset($_POST['delete'])) { // SUPPRIMER UN DOCUMENT
                $sql_delete="DELETE FROM admin WHERE id_admin=$idAdmin";
                $query_delete=mysqli_query($lien,$sql_delete);

                echo ('<p class="admin__response">Le compte admin a été supprimé. Sélectionnez un admin à gauche pour rafraîchir la page !</p>');
                header('Location: ./gestion.php');
                exit();
            }

            if (isset($_POST['submit'])) { // MODIFIER UN DOCUMENT

                $nom = $_POST['nom'];
                $prenom= change($_POST['prenom']);
                $password = $_POST['password'];
                $mail = $_POST['mail'];

                $sql_admin="UPDATE admin SET admin_nom = '".$nom."', admin_prenom = '".$prenom."', admin_password = '".$password."', admin_mail = '".$mail."' WHERE id_admin=$idAdmin";
                $query_admin=mysqli_query($lien,$sql_admin);

                echo ('<p class="admin__response">Le compte admin a été modifié. Sélectionnez un admin à gauche pour rafraîchir la page !</p>');
                header('Location: ./gestion.php');
                exit();
            }
        }


        else { //Ajout d'un nouveau admin
            echo ('<input class="admin__button admin__prix" type="text" name="nomAdd"  placeholder="Prénom" required value="">');
            echo ('<input class="admin__button admin__prix" type="text" name="prenomAdd"  placeholder="Nom de famille" required value="">');
            echo ('<input class="admin__button" type="email" name="mailAdd"  placeholder="Mail" required value="">');
            echo ('<input class="admin__button" type="password" name="passwordAdd"  placeholder="Mot de passe (8 caractères minimum)" required  value="">');

            echo ('<input class="admin__button admin__submit" id="submit" name="submitAdd" type="submit" value="VALIDER">');
            echo ('</form>');

            if (isset($_POST['submitAdd'])) { // AJOUTER UN RESTAURANT
                $nomAdd = change($_POST['nomAdd']);
                $prenomAdd = change($_POST['prenomAdd']);
                $passwordAdd = change($_POST['passwordAdd']);
                $mailAdd = change($_POST['mailAdd']);


                $sql_ajouter="INSERT INTO admin(admin_nom, admin_prenom, admin_password, admin_mail) VALUES('".$nomAdd."','".$prenomAdd."','".$passwordAdd."','".$mailAdd."')";

                $query_ajouter=mysqli_query($lien,$sql_ajouter);

                echo ('<p class="admin__response">Le compte admin a été ajouté. Sélectionnez un admin à gauche pour rafraîchir la page !</p>');

                header('Location: ./gestion.php');
                exit();
            }
        }
        ?>
</section>
</body>
</html>