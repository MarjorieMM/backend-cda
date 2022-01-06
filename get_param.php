<?php
// Chargement des données
require_once 'peoples.php';

function searchForId(int $id, array $array): ?int
{
  foreach ($array as $key => $user) {
    if ($user['id'] === $id) {
      return $key;
    }
  }
  return null;
}

// $_GET est un tableau associatif
// Il faut donc accéder à ses indexes par les noms des paramètres d'URL
// et non par des indexes numériques
$id = $_GET['id'];

require_once 'layout/header.php';

// $userKey = searchForId($id, $peoples);

$userKey = array_search($id, array_column($peoples, 'id'));

if ($userKey !== false) {
  $people = $peoples[$userKey];
  require_once 'item.php';
} else {
  echo "Utilisateur non trouvé";
}

require_once 'layout/footer.php';
