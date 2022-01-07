<?php
$firstname = $_POST['firstname'];
$name = $_POST['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Process du Prénom</title>
</head>

<body>
  <h1>Réception du prénom et du nom</h1>

  <p>
    <?php echo $firstname; ?>
  </p>
  <p>
    <?php echo $name; ?>
  </p>
</body>

</html>