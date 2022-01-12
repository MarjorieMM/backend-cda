<?php
class Email
{
  private string $email;

  public function __construct(string $email)
  {
    $this->email = $email;
  }

  public function isValid(): bool
  {
    return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
  }

  public function isSpam(): bool
  {
    // Vérifier que le domaine de l'email n'est pas connu comme spam
    // Déclarer un tableau contenant les domaines identifiés comme spam
    $spamDomains = ['youhou.com', 'mailinator.com', 'free.fr'];

    // Extraire le domaine de l'adresse email
    // coucou@test.com => séparer la chaîne de caractère pour n'avoir que ce qui se trouve avant et après le '@'
    // Je vais garder ce qui se trouve après le '@'
    // Donc, dans le résultat de la fonction explode, le deuxième élément : celui qui a l'indice 1
    $emailParts = explode('@', $this->email);
    $emailDomain = $emailParts[1];

    // Chercher dans le tableau de domaines si on trouve le domaine de l'email
    foreach ($spamDomains as $spamDomain) {
      if ($emailDomain === $spamDomain) {
        return true;
      }
    }

    return false;
  }
}
