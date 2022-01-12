<?php
class Produit // Une classe
{
  // --- Attributs ----------------
  private string $nom;
  private float $prixHT;

  // --- Méthodes -----------------
  public function __construct(string $nom = "Un produit par défaut", float $prixHT = 10)
  {
    echo "Constructeur de produit<br />";
    $this->nom = $nom;
    $this->prixHT = $prixHT;
  }

  // Getter - Accesseur
  public function getNom(): string
  {
    return strtoupper($this->nom);
  }

  // Setter - Modificateur
  public function setNom(string $nom): void
  {
    $this->nom = htmlspecialchars($nom);
  }

  public function getPrixTtc(float $taux): float
  {
    return $this->prixHT * (1 + $taux);
  }

  public function getPrixHT(): float
  {
    return $this->prixHT;
  }

  public function setPrixHT(float $prixHT): self
  {
    $this->prixHT = $prixHT;

    return $this;
  }
}
