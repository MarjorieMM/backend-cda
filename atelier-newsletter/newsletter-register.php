<?php
require_once 'Email.php';
// Si on n'a pas d'email dans le tableau $_POST
// Donc par exemple qu'on tente d'accéder à la page avec la méthode GET
// alors on redirige vers l'index, donc le formulaire
if (!isset($_POST['email'])) {
  header('Location: index.php');
  exit;
}

// Récupérer l'email du tableau $_POST
$email = new Email($_POST['email']);

// Vérifier que le format de l'email est valide
if (!$email->isValid()) {
  echo "Le format de l'adresse email est invalide";
  exit;
}

if ($email->isSpam()) {
  echo "Ce domaine n'est pas autorisé dans notre newsletter";
} else {
  echo "Tout va bien";
}
