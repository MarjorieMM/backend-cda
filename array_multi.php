<?php
// Charger les données
include 'peoples.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="array_multi.css" rel="stylesheet">
  <title>Utilisateurs</title>
</head>

<body>
  <header>
    <h1>Utilisateurs</h1>
  </header>
  <main>
    <section class="list">
      <?php foreach ($peoples as $people) { ?>
        <article class="item">
          <div class="picture">
            <img src="<?php echo $people['avatar']; ?>" alt="<?php echo $people['name'] . ' ' . $people['firstname']; ?>" />
          </div>
          <div class="infos">
            <h3><?php echo $people['name'] . ' ' . $people['firstname']; ?></h3>
            <h4><?php echo $people['age']; ?> ans</h4>
          </div>
        </article>
      <?php } ?>
    </section>
  </main>
</body>

</html>