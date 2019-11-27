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
<html lang="en" class="gestion">
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

Dans le select/option du formulaire d'un restaurant existant : la catégorie original s'affiche (normal) mais du coup elle est obligatoirement en double (ce que je ne veux pas) car je récupère toutes les catégories
-->
<header class="admin-header">
	<div class="admin-header__profil">
		<img src="../assets/images/logo.png" class="admin-header__logo" alt="">
		<h1 class="admin-header__adminName">Gestion des restaurants</h1>
		<div class="admin-header__containerButton">
			<a href="./gestion.php" alt="Gestion comptes administrateur" class="admin-header__gestionAdmin admin-header__gestionAdmin--hover"><img src="../assets/images/admin_black.png" alt="" class="admin-header__img"></a>
			<a href="home.php" class=""><img src="../assets/images/add.png" alt="" class="admin-header__img"></a>
		</div>
	</div>

	<div class="admin-header__categories">
		<form method="post">
			<button class="admin-header__cancel" type="submit" name="delete""><img src="../assets/images/delete.png" alt="" class="admin-header__img"></button>
            <?php
            $idRestaurant = $_GET['id_restaurant'];
            $sql_list = "SELECT * FROM restaurant ORDER BY id_restaurant DESC";
            $query_list = mysqli_query($lien, $sql_list);
            while ($result_list = mysqli_fetch_assoc($query_list))
            {
                echo ('<a href="./home.php?id_restaurant='.$result_list["id_restaurant"].'" class="admin-header__list">" <span class="admin-header__list--bold">'.$result_list["restaurant_nom"].'</span> " - '.$result_list["restaurant_code_postal"].'</a>');
            }
            ?>
		</form>
	</div>
	<a class="admin-header__disconnection" href="index.php?logout" alt="Déconnexion">DÉCONNEXION</a>
</header>

<section class="admin">

	<h1 class="admin__title">A modifier</h1>
	<form method="post" class="admin__containerFormulaire">
        <?php
        if (isset($idRestaurant)) { // Sélection d'un restaurant
            $sql_restaurant="SELECT * FROM restaurant WHERE id_restaurant=$idRestaurant";
            $query_restaurant=mysqli_query($lien,$sql_restaurant);
            while ($result_restaurant = mysqli_fetch_assoc($query_restaurant)) {
                $restaurantNom = $result_restaurant['restaurant_nom'];
                $restaurantDescription = change($result_restaurant['restaurant_description']);
                $restaurantPrixMin = $result_restaurant['restaurant_prix_min'];
                $restaurantPrixMax = $result_restaurant['restaurant_prix_max'];
                $restaurantRue = $result_restaurant['restaurant_adresse'];
                $restaurantVille = $result_restaurant['restaurant_ville'];
                $restaurantCodePostal = $result_restaurant['restaurant_code_postal'];
                $restaurantTel = $result_restaurant['restaurant_telephone'];
                $restaurantImg = $result_restaurant['restaurant_image'];
                $restaurantcategorie = $result_restaurant['restaurant_categorie'];
            }
            $sql_categorie="SELECT id_categorie,categorie_nom from categorie";
            $query_categorie=mysqli_query($lien,$sql_categorie);
            echo ('<input class="admin__button" type="text" name="nom"  placeholder="Nom du restaurant" required  value="'.$restaurantNom.'">');
            echo ('<textarea class="admin__button admin__description" name="description" required placeholder="Description">'.$restaurantDescription.'</textarea>');
            echo ('<select class="admin__nameCategory" name="categorie">');
                while ($result_categorie= mysqli_fetch_assoc($query_categorie)) {
                	if ($restaurantcategorie == $result_categorie["id_categorie"] )
	                {
                        echo('<option  selected  value="' . $result_categorie["id_categorie"] . '">'.$result_categorie["categorie_nom"].'</option>');
	                } else
                    echo('<option value="' . $result_categorie["id_categorie"] . '">' . $result_categorie["categorie_nom"] . '</option>');
                }

            echo('</select>');
            echo('<input class="admin__button admin__prix" type="number" name="prixMin" required  placeholder="Prix Minimum" value="'.$restaurantPrixMin.'">');
            echo('<input class="admin__button admin__prix" type="number" name="prixMax" required  placeholder="Prix Maximum" value="'.$restaurantPrixMax.'">');
            echo('<input class="admin__button" type="text" placeholder="Rue" name="rue" required  value="'.$restaurantRue.'">');
            echo('<input class="admin__button admin__prix" type="text" name="ville" required  placeholder="Ville" value="'.$restaurantVille.'">');
            echo('<input class="admin__button admin__prix" type="number" name="codePostal" required  placeholder="Code Postal" value="'.$restaurantCodePostal.'" maxlength="5">');
            echo('<input class="admin__button" type="tel" placeholder="Téléphone" name="tel" required  value="'.$restaurantTel.'" minlength="10" maxlength="10">');
            echo('<input class="admin__button" type="url" name="img" required  placeholder="URL d\'une image. Format minimum conseillé : 1024 x 768" value="'.$restaurantImg.'">');
            echo ('<input class="admin__button admin__submit" id="submit" name="submit" type="submit" value="VALIDER">');
            echo ('</form>');

            if (isset($_POST['delete'])) { // SUPPRIMER UN DOCUMENT
                $sql_delete="DELETE FROM restaurant WHERE id_restaurant=$idRestaurant";
                $query_delete=mysqli_query($lien,$sql_delete);

                echo ('<p class="admin__response">Le restaurant a été supprimé. Sélectionnez un restaurant à gauche pour rafraîchir la page !</p>');
                header('Location: ./home.php');
                exit();
            } if (isset($_POST['submit'])) { // MODIFIER UN DOCUMENT

                $nom = $_POST['nom'];
                $description = change($_POST['description']);
                $categorie = $_POST['categorie'];
                $min = $_POST['prixMin'];
                $max = $_POST['prixMax'];
                $rue = $_POST['rue'];
                $ville = $_POST['ville'];
                $post = $_POST['codePostal'];
                $tel = $_POST['tel'];
                $img = $_POST['img'];

                $sql_restaurant="UPDATE restaurant SET restaurant_nom = '".$nom."', restaurant_description = '".$description."', restaurant_categorie = ".$categorie.",restaurant_prix_min = ".$min.", restaurant_prix_max = ".$max.", restaurant_adresse = '".$rue."', restaurant_ville = '".$ville."', restaurant_code_postal = ".$post.", restaurant_telephone = ".$tel.", restaurant_image = '".$img."' WHERE id_restaurant=$idRestaurant";
                $query_restaurant=mysqli_query($lien,$sql_restaurant);

                echo ('<p class="admin__response">Le restaurant a été modifié. Sélectionnez un restaurant à gauche pour rafraîchir la page !</p>');
                header('Location: ./home.php');
                exit();
            }
        }


        else { //Ajout d'un nouveau restaurant
        	echo('<input class="admin__button" type="text" placeholder="Nom du restaurant" name="nomAdd"  value="">');
        	echo ('<textarea class="admin__button admin__description" name="descriptionAdd"  placeholder="Description"></textarea>');
        	echo('<select class="admin__nameCategory" name="categorieAdd">');
        	    echo('<option disabled selected>Catégorie</option>');
                $sql_categorie="SELECT id_categorie,categorie_nom from categorie";
                $query_categorie=mysqli_query($lien,$sql_categorie);
                while ($result_categorie= mysqli_fetch_assoc($query_categorie)) {
                    echo('<option value="'.$result_categorie["id_categorie"].'">'.$result_categorie["categorie_nom"].'</option>');
                }
            echo ('</select>');
            echo ('<input class="admin__button admin__prix" type="number" required  name="prixMinAdd"  placeholder="Prix Minimum" value="">');
            echo('<input class="admin__button admin__prix" type="number" required  name="prixMaxAdd"  placeholder="Prix Maximum" value="">');
            echo ('<input class="admin__button" type="text"  placeholder="Rue" required  name="rueAdd"  value="">');
            echo('<input class="admin__button admin__prix" required type="text"  name="villeAdd"  placeholder="Ville" value="">');
            echo ('<input class="admin__button admin__prix" required type="number"  name="codePostalAdd"  placeholder="Code Postal" value="" maxlength="5">');
            echo('<input class="admin__button" type="tel" required placeholder="Téléphone"  name="telAdd"  value="" minlength="10" maxlength="10">');
            echo('<input class="admin__button" type="url" required  name="imgAdd"  placeholder="URL d\'une image. Format minimum conseillé : 1024 x 768" value="">');
            echo('<input class="admin__button admin__submit" name="submitAdd"  type="submit" value="VALIDER">');
            echo ('</form>');

            if (isset($_POST['submitAdd'])) { // AJOUTER UN RESTAURANT
                $nomAdd = $_POST['nomAdd'];
                $descriptionAdd = change($_POST['descriptionAdd']);
                $categorieAdd = $_POST['categorieAdd'];
                $minAdd = $_POST['prixMinAdd'];
                $maxAdd = $_POST['prixMaxAdd'];
                $rueAdd = $_POST['rueAdd'];
                $villeAdd = $_POST['villeAdd'];
                $postAdd = $_POST['codePostalAdd'];
                $telAdd = $_POST['telAdd'];
                $imgAdd = $_POST['imgAdd'];



                $sql_ajouter="INSERT INTO restaurant(restaurant_nom, restaurant_description, restaurant_categorie, restaurant_prix_min, restaurant_prix_max, restaurant_adresse, restaurant_code_postal, restaurant_telephone, restaurant_image, restaurant_admin, restaurant_ville) VALUES('".$nomAdd."','".$descriptionAdd."',".$categorieAdd.",".$minAdd.",".$maxAdd.",'".$rueAdd."',".$postAdd.",".$telAdd.",'".$imgAdd."',0,'".$villeAdd."')";
                $query_ajouter=mysqli_query($lien,$sql_ajouter);

                echo ('<p class="admin__response">Le restaurant a été ajouté. Sélectionnez un restaurant à gauche pour rafraîchir la page !</p>');

                header('Location: ./home.php');
                exit();
            }
        }
        ?>
</section>
</body>
</html>