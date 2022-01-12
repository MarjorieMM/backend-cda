<?php
// Si on n'a pas d'email dans le tableau $_POST
// Donc par exemple qu'on tente d'accéder à la page avec la méthode GET
// alors on redirige vers l'index, donc le formulaire
if (!isset($_POST['email'])) {
  header('Location: index.php');
  exit;
}

$error = false;
// Récupérer l'email du tableau $_POST
$email = $_POST['email'];

// Vérifier que le format de l'email est valide
$isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$isEmailValid) {
  echo "Le format de l'adresse email est invalide";
  exit;
}

// Vérifier que le domaine de l'email n'est pas connu comme spam
// Déclarer un tableau contenant les domaines identifiés comme spam
$spamDomains = ['youhou.com', 'mailinator.com', 'free.fr'];
// Extraire le domaine de l'adresse email
// coucou@test.com => séparer la chaîne de caractère pour n'avoir que ce qui se trouve avant et après le '@'
// Je vais garder ce qui se trouve après le '@'
// Donc, dans le résultat de la fonction explode, le deuxième élément : celui qui a l'indice 1
$emailParts = explode('@', $email);
$emailDomain = $emailParts[1];
// Chercher dans le tableau de domaines si on trouve le domaine de l'email
foreach ($spamDomains as $spamDomain) {
  if ($emailDomain === $spamDomain) {
    echo "Ce domaine n'est pas autorisé dans notre newsletter";
    $error = true;
  }
}

if (!$error) {
  echo "Tout va bien";
}
