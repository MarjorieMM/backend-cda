<?php
require_once 'constants.php';

function getConnection(): PDO
{
  try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
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

  return $pdo;
}
