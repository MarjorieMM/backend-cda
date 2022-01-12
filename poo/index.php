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

echo "Le propriétaire de cette télé est né le " . $teleHD->getOwner()->getFormattedBirthDate();
// Avec un tableau sur lequel on bouclerait, on aurait certainement écrit quelque chose comme :
// $produits[$i]['owner']['birth_date']->format('d/m/Y')

// --- User ---------------------------------------------------------------------
$bobDylanBirthDate = new DateTime('24-05-1941');
$user = new User($bobDylanBirthDate);
var_dump($user);
echo $user->getFullName() . "<br />";
echo $user->getAge() . "<br />";
echo "La date de naissance de Bob Dylan est le " . $user->getFormattedBirthDate();
echo "<br>";

// --- Newsletter---------------------------------------------------------------------

$spams = ["bogus.com", "spam.net", "youhou.fr"];
$email = 'monemail@hotmail.com';
$domain = explode('@', $email)[1];
echo $domain;
echo "<br>";

$error = 0;
foreach ($spams as $spam) {
    if ($spam === $domain) {
        $error += 1;
    }
}
var_dump($error);