<?php
require_once 'data/products.php';
require_once 'functions.php';

// Ici, on fixe le nombre de produits qu'on souhaite afficher par page.
// On utilise une constante pour éviter toute modification ultérieure
// de cette valeur.
// Par ailleurs, il est utile de pouvoir nommer cette valeur (nom de la constante)
// pour mieux comprendre, dans le code, à quoi correspond ce "5".
const PRODUCTS_PER_PAGE = 5;

// intval convertit une valeur donnée en valeur entière
// Le paramètre GET "page" pouvant ne pas être présent dans l'URL,
// alors il ne sera peut-être pas défini dans le tableau $_GET.
// Ainsi, nous pouvons utiliser l'opérateur COALESCE (??),
// pour indiquer à PHP que si $_GET['page'] n'existe pas, alors
// on lui attribute la valeur 1.
const DEFAULT_PAGE = 1;
$page = intval($_GET['page'] ?? DEFAULT_PAGE);
if ($page === 0) {
  $page = DEFAULT_PAGE;
}

// Page 1 : départ = 0
// Page 2 : départ = 5
// Page 3 : départ = 10
// ==> ($page - 1) * PRODUCTS_PER_PAGE
$startIndex = ($page - 1) * PRODUCTS_PER_PAGE;

// Je construis un sous-ensemble de produits en extrayant une portion de $products
// Je pars de la clé de départ $startIndex calculée juste avant,
// et souhaite intégrer à mon sous-ensemble uniquement le nombre de produits
// que je veux afficher par page
$displaySet = array_slice($products, $startIndex, PRODUCTS_PER_PAGE);
if (empty($displaySet)) { // pas de résultat
  redirect('index.php?page=1');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
  <title>Produits</title>
</head>

<body>
  <header>
    <h1>Produits</h1>
  </header>
  <main>
    <section class="list">
      <?php foreach ($displaySet as $product) {
        require 'product-item.php';
      } ?>
    </section>
  </main>
</body>

</html>