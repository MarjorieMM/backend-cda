<?php
class User
{
  private string $name;
  private string $firstname;
  private DateTime $birthDate;

  public function __construct(DateTime $birthDate, string $name = "Dylan", string $firstname = "Bob")
  {
    $this->name = $name;
    $this->firstname = $firstname;
    $this->birthDate = $birthDate;
  }

  public function getFullName(): string
  {
    // On peut utiliser les accesseurs ou les attributs directement
    return $this->getName() . ' ' . $this->getFirstname();
  }

  public function getAge(): int
  {
    $now = new DateTime();
    // ageInterval = now - birthDate
    $ageInterval = $now->diff($this->birthDate);

    return $ageInterval->y;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function setFirstname(string $firstname): self
  {
    $this->firstname = $firstname;

    return $this;
  }

  public function getBirthDate(): DateTime
  {
    return $this->birthDate;
  }
}
