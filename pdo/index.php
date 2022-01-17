<?php

$dsn = "mysql:dbname=wf3-php;host=127.0.0.1;charset=utf8mb4";
$user = "wf3-php";
$password = ")zM35[Z[lun*OEsj";

try {
  $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données<br />";
  switch ($e->getCode()) {
    case 1045:
      echo "Identifiants incorrects";
      break;
    case 2019:
      echo "Jeu de caractères inconnu";
      break;
    default:
      echo "Une erreur est survenue";
  }
  exit;
}

// J'écris ma requête
$query = "SELECT * FROM people";
// Je construis un Statement à partir de ma requête
// Ce sera l'ensemble de mes résultats
$stmt = $pdo->query($query);
// Je lis le premier résultat avec fetch
// Avec la constante de classe PDO::FETCH_ASSOC,
// j'indique à PDO que je souhaite ma ligne
// sous forme de tableau associatif
// indexé par les noms des colonnes
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// fetchAll pour récupérer toutes les lignes d'un coup
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// le résultat de fetch va être mis dans $row
// Puis $row va être évaluée
// Donc s'il s'agit d'une ligne, elle sera !== false
// Donc on pourra rester dans le while.
// Par contre, s'il n'y a plus de résultats,
// fetch retournera effectivement false.
// Cela casse la condition de maintien, on sort de la boucle.
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  var_dump($row);
}
