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

function formatAndUppercase(string $text, string $tag): string
{
  // if ($tag === "div" || $tag === "span" || $tag === "p") {
  //   return "<" . $tag . ">" . strtoupper($text) . "</" . $tag . ">";
  // } else {
  //   return getParagraphUppercase($text);
  // }

  // Switch : structure conditionnelle
  // On teste les valeurs possibles d'une variable au travers de cas
  // Une instruction break sort du switch
  switch ($tag) {
    case 'div':
    case 'span':
      break;
    case 'p':
    default:
      return getParagraphUppercase($text);
  }

  return "<" . $tag . ">" . strtoupper($text) . "</" . $tag . ">";
}
// Inverse de $tag === "div" || $tag === "span" || $tag === "p" :
// On inverse les opérateurs de comparaison (=== devient !==)
// et on inverse les opérateurs logiques (|| devient &&)
// $tag !== "div" && $tag !== "span" && $tag !== "p"

direBonjour();

echo somme(2, 3);
echo somme(8);

$text = "blue plain zoo moment neighborhood contain pupil statement separate exact within trip than population steep wheel storm beginning seed ocean too rocky crowd donkey";

echo getParagraphUppercase($text);
echo formatAndUppercase($text, "div");
echo formatAndUppercase($text, "span");
echo formatAndUppercase($text, "p");
echo formatAndUppercase($text, "img");
