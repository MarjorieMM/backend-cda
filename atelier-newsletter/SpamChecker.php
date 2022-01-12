<?php
class SpamChecker
{
  // Déclarer un tableau contenant les domaines identifiés comme spam
  // Je déclare ce tableau sous forme de constante de classe
  // Je peux mettre ce tableau en privé avec le mot-clé private
  // car je n'en ai qu'une utilisation interne à la classe
  private const SPAM_DOMAINS = ['youhou.com', 'mailinator.com', 'free.fr', 'hello.net'];

  public function isSpam(Email $email): bool
  {
    // Vérifier que le domaine de l'email n'est pas connu comme spam
    // Chercher dans le tableau de domaines si on trouve le domaine de l'email
    return array_search($email->getDomain(), self::SPAM_DOMAINS) !== false;
  }
}
