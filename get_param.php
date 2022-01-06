<?php
// Chargement des données
require_once 'peoples.php';

// $_GET est un tableau associatif
// Il faut donc accéder à ses indexes par les noms des paramètres d'URL
// et non par des indexes numériques
$id = $_GET['id'];

// var_dump($peoples);

function findUser($id, $users)
{
  foreach ($users as $user) {
    if ($user["id"] == $id) {
      var_dump($user);
    }
  }
}

findUser($id, $peoples);