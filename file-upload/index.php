<?php
if (isset($_FILES['avatar'])) {
  // Je peux lancer le traitement de mon fichier
  // et donc son enregistrement

  // Je récupère le tableau associatif complet dans une variable
  $avatar = $_FILES['avatar'];
  // Je peux donc extraire son nom de fichier
  $filename = $avatar['name'];
  // Je définis une destination
  $destination = __DIR__ . '/img/avatars/';

  // Je lance l'upload vers la destination
  if (move_uploaded_file($avatar['tmp_name'], $destination . $filename)) {
    echo "Upload ok";
  } else {
    echo "Erreur lors de l'upload";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File upload</title>
</head>

<body>
  <h1>Upload d'avatar</h1>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="avatar" id="avatar" />
    <button type="submit">Envoyer</button>
  </form>
</body>

</html>