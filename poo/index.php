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

// $produit est un objet : une instance de classe
// On peut donc instancier autant d'objets qu'on le souhaite
$produit = new Produit();
// Impossible d'accéder directement à l'attribut nom s'il est défini comme privé
// $produit->nom = "Mon super produit";
// echo $produit->nom . "<br />";
$produit->setNom("Mon super produit");
echo $produit->getNom() . "<br />";
// Impossible d'accéder directement à l'attribut nom s'il est défini comme privé
// $produit->prixHT = 20;
// echo $produit->prixHT;
$produit->setPrixHT(20);
echo $produit->getPrixHT();
echo $produit->getPrixTtc(0.2);

$produit2 = new Produit("Table basse");
// Impossible d'accéder directement à l'attribut nom s'il est défini comme privé
// $produit2->prixHT = 40;
$produit2->setPrixHT(40);

echo $produit2->getPrixTtc(0.1) . "<br />";

$teleHD = new Produit("Téléviseur HD", 500);
var_dump($teleHD);

$test = true;
