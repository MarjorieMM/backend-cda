<?php
$peoples = [
  [
    'avatar' => 'images/avatar_1.jpg',
    'name' => 'Barnes',
    'firstname' => 'Marguerite',
    'age' => '44'
  ],
  [
    'avatar' => 'images/avatar_2.jpg',
    'name' => 'Baker',
    'firstname' => 'Gabriel',
    'age' => '33'
  ],
  [
    'avatar' => 'images/avatar_3.jpg',
    'name' => 'Barker',
    'firstname' => 'Ola',
    'age' => '34'
  ],
  [
    'avatar' => 'images/avatar_4.jpg',
    'name' => 'Lopez',
    'firstname' => 'Rosie',
    'age' => '49'
  ],
  [
    'avatar' => 'images/avatar_1.jpg',
    'name' => 'Toto',
    'firstname' => 'Tata',
    'age' => '15'
  ],
];
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