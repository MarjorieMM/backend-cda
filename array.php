<?php
// En PHP, on peut mélanger les types dans un tableau
$array = [1, 4, "test", 8, 9];
var_dump($array); // A ne pas utiliser comme un echo

echo "<br>";
// Pour accéder à un élément via son index (clé), on utilise les crochets
// Et les clés sont numérotées automatiquement par PHP à partir de 0
echo $array[2]; // Ici on veut afficher le troisième élément

// Tableau associatif
// Clés / Valeurs
// On spécifie nous-mêmes les clés
$arrayIndexes = [2 => 1, "autre test" => 4];
echo "<br>";
var_dump($arrayIndexes);

echo $arrayIndexes[0]; // non valide, la clé 0 n'existe pas dans le tableau

// Boucles
// for
// while
// foreach
// do...while

// --- BOUCLE FOR ---
// Instruction d'initialisation
// Condition de maintien
// Instruction de pas
for ($i = 0; $i < count($array); $i++) {
  echo $array[$i] . "<br>";
}

echo "<br />";

// --- BOUCLE WHILE ---
$i = 0; // Instruction d'initialisation
while ($i < count($array)) { // Condition de maintien
  echo $array[$i] . "<br>";
  $i++; // Instruction de pas : incrémentation de $i pour éviter une boucle infinie
}

echo "<br />";

// --- BOUCLE FOREACH ---
foreach ($array as $value) {
  echo $value . "<br>";
}

echo "<br />";

// --- BOUCLE DO...WHILE ---
$i = 0; // Instruction d'initialisation
do {
  echo $array[$i] . "<br>"; // Cette instruction s'exécutera toujours au moins une fois
  $i++; // Instruction de pas : incrémentation de $i pour éviter une boucle infinie
} while ($i < count($array)); // Condition de maintien

echo "<br />";

// --- BOUCLE FOREACH SUR TABLEAU ASSOCIATIF ---
foreach ($arrayIndexes as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
