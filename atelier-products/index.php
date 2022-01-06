<?php require_once 'data/products.php'; ?>
<?php require_once 'functions.php';

$page = intval($_GET['page' ?? 1]);
if ($page === 0) {
  $page = 1;
}
const PRODUCTS_PER_PAGE = 6;
$display_set = array_slice($products, 0, PRODUCTS_PER_PAGE)

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
                <!-- <?php $i = 1;
            foreach ($products as $product) {
              $i++;
              if ($i < 7) {
                require 'product-item.php';
              }
            } ?> -->
                <?php foreach ($display_set as $product) {
        require 'product-item.php';
      } ?>
            </section>
        </main>
    </body>

</html>