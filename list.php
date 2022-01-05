<?php
// Charger les données
require_once 'peoples.php';

$title = "Utilisateurs";
require_once 'layout/header.php';
?>

<header>
  <h1>Utilisateurs</h1>
</header>
<main>
  <section class="list">
    <?php foreach ($peoples as $people) {
      require 'item.php';
    } ?>
  </section>
</main>

<?php
require_once 'layout/footer.php';
