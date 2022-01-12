<!-- Créer un fichier user.php, qui contiendra une classe User. Un User aura un nom (string), prénom (string) et une date de naissance (DateTime). Sur une instance de User, on pourra afficher son nom complet et son âge.  -->

<?php

class User
{
    private string $nom = "pas de nom";
    private string $prenom = "pas de prénom";
    private $dateNaissance;

    public function __construct(string $dateNaissance)
    {
        $this->dateNaissance = new DateTime($dateNaissance);
    }


    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }


    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }
}


$utilisateur = new User("12/01/1976");

$utilisateur->setNom("Doe");
$utilisateur->SetPrenom("Joe");

echo $utilisateur->getNom();
echo "<br>";
echo $utilisateur->getPrenom();
echo "<br>";
echo $utilisateur->getDateNaissance()->format("d/m/Y");
