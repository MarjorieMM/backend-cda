<?php
// Signature d'une fonction :
// nom(parametres): type_retour

function direBonjour(string $nom = "Bob", bool $appendBrTag = true): void
{
  echo "Bonjour $nom !" . ($appendBrTag ? "<br />" : "");
}

function getParagraphUppercase(string $text): string
{
  return "<p>" . strtoupper($text) . "</p>";
}

function somme(int $a, int $b = 5): int
{
  return $a + $b;
}

direBonjour();

echo somme(2, 3);
echo somme(8);

$text = "blue plain zoo moment neighborhood contain pupil statement separate exact within trip than population steep wheel storm beginning seed ocean too rocky crowd donkey";

echo getParagraphUppercase($text);
