<?php 
require "../database.php";
$database= new DataBaseConnectionManager();

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$email = $_GET['email'];
$cell = $_GET['cell'];
$nomutilisateur = $_GET['nomutilisateur'];
$motdepasse = $_GET['motdepasse'];

$database->getInfoData($nom,$prenom,$email,$cell,$nomutilisateur,$motdepasse);

echo $nom;
echo "<br>";
echo $prenom;
echo "<br>";
echo $email;
echo "<br>";
echo $cell;
echo "<br>";
echo $nomutilisateur;
echo "<br>";
echo $motdepasse;
echo "<br>";


