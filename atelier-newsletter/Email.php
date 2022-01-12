<?php
class Email
{
  private string $email;

  /**
   * Creates a new Email instance
   *
   * @param string $email The value to be stored in instance
   * @throws InvalidArgumentException if email format is not valid
   */
  public function __construct(string $email)
  {
    $this->email = $email;

    if (!$this->isValid()) {
      throw new InvalidArgumentException("Le format de l'adresse email est invalide");
    }
  }

  public function isValid(): bool
  {
    return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
  }

  public function getDomain(): string
  {
    // Extraire le domaine de l'adresse email
    // coucou@test.com => séparer la chaîne de caractère pour n'avoir que ce qui se trouve avant et après le '@'
    // Je vais garder ce qui se trouve après le '@'
    // Donc, dans le résultat de la fonction explode, le deuxième élément : celui qui a l'indice 1
    $emailParts = explode('@', $this->email);
    return $emailParts[1];
  }

  public function getEmail(): string
  {
    return $this->email;
  }
}
