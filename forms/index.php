<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>

<body>
  <!-- Form :
  action = cible du formulaire
  méthode par défaut = GET
  -->
  <form action="process_prenom.php" method="POST">
    <label for="firstname">Prénom :</label>
    <input type="text" name="firstname" id="firstname" />
    <input type="text" name="name" id="name" />

    <input type="submit" value="Envoyer 😜" />
  </form>

  <!--
  Form sans action : cible du formulaire = fichier courant
  -->
  <form>
    <label for="age">Age : </label>
    <input type="text" name="age" id="age" />
    <input type="submit" value="Envoyer" />
  </form>
</body>

</html>