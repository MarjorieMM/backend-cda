<?php
// Chargement des données
require_once 'peoples.php';

// $_GET est un tableau associatif
// Il faut donc accéder à ses indexes par les noms des paramètres d'URL
// et non par des indexes numériques
$id = $_GET['id'];

var_dump($peoples[$id]);

/*
$peoples :
[
  [0] => [
    'id' => 1,
    'avatar' => ...,
  ],
  [1] => [
    'id' => 45,
    'avatar' => ...,
  ],
  [2] => [
    'id' => 153,
    'avatar' => ...,
  ],
  ...
]
*/
