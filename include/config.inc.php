<?php

session_start();

// Connexion au serveur MySQL

$host = "localhost";
$user = "msalsou";
$password = "_MPLKYUAt7";
$bdd = "msalsou";

$lien = mysqli_connect($host,$user,$password,$bdd);

mysqli_query($lien,"set names utf8");

?>
