<?php
require_once 'Produit.php';
require_once 'User.php';

// $produit est un objet : une instance de classe
// On peut donc instancier autant d'objets qu'on le souhaite
$produit = new Produit();
// Impossible d'accéder directement à l'attribut nom s'il est défini comme privé
// $produit->nom = "Mon super produit";
// echo $produit->nom . "<br />";
$produit->setNom("Mon super produit");
echo $produit->getNom() . "<br />";
// Impossible d'accéder directement à l'attribut nom s'il est défini comme privé
// $produit->prixHT = 20;
// echo $produit->prixHT;
$produit->setPrixHT(20);
echo $produit->getPrixHT();
echo $produit->getPrixTtc(0.2);

$produit2 = new Produit("Table basse");
// Impossible d'accéder directement à l'attribut nom s'il est défini comme privé
// $produit2->prixHT = 40;
$produit2->setPrixHT(40);

echo $produit2->getPrixTtc(0.1) . "<br />";

$teleHD = new Produit("Téléviseur HD", 500);
var_dump($teleHD);

$test = true;

// --- User ---------------------------------------------------------------------
$bobDylanBirthDate = new DateTime('24-05-1941');
$user = new User($bobDylanBirthDate);
var_dump($user);
echo $user->getFullName() . "<br />";
echo $user->getAge();
