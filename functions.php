<?php
// Signature d'une fonction :
// nom(parametres): type_retour

function direBonjour(string $nom = "Bob"): void
{
  echo "Bonjour $nom !";
}

function somme(int $a, int $b = 5): int
{
  return $a + $b;
}

direBonjour();

echo somme(2, 3);
echo somme(8);
