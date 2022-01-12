<?php
require_once 'Email.php';
require_once 'SpamChecker.php';
// Si on n'a pas d'email dans le tableau $_POST
// Donc par exemple qu'on tente d'accéder à la page avec la méthode GET
// alors on redirige vers l'index, donc le formulaire
if (!isset($_POST['email'])) {
  header('Location: index.php');
  exit;
}

// Récupérer l'email du tableau $_POST
// et créer une instance de la classe Email en conséquence
// Je passe donc au constructeur de la classe Email
// l'email récupéré de mon tableau $_POST
// Je fais une gestion d'exception au cas où l'email soit incorrect
// Avec try, j'exécute une ou plusieurs instructions et les "essaye"
// Au cas où une instruction échoue, elle va me lancer une exception
// que je vais attraper avec un catch
// Je vais donc pouvoir réagir en fonction de l'exception renvoyée
try {
  $email = new Email($_POST['email']);
} catch (InvalidArgumentException $ex) {
  // echo "Le format de l'adresse email est invalide";
  echo $ex->getMessage();
  exit;
}

$spamChecker = new SpamChecker();
if ($spamChecker->isSpam($email)) {
  echo "Ce domaine n'est pas autorisé dans notre newsletter";
} else {
  echo "Tout va bien";
}
