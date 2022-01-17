<?php
$title = "S'inscrire";
require_once "layout/header.php";
 ?>   

<h1 class="text-center">S'inscrire sur Rencontres-app</h1>
<form action="register-process.php" method="post">
    <label for="pseudo" class="form-label mt-5">Choisir un pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" class="form-control">
    <label for="password"  class="form-label mt-4">Choisir un mot de passe :</label>
    <input type="password" name="password" id="password" class="form-control">
    <label for="birthdate"  class="form-label mt-4">Entrez votre date de naissance :</label>
    <input type="date" name="birthdate" id="birthdate" class="form-control">
    <label for="avatar"  class="form-label mt-4">Choisir une photo de profil :</label>
    <input type="file" name="avatar" id="avatar" class="form-control">
    <div>
    <p class="mt-4">Sélectionnez votre orientation sexuelle :</p>
  <div>
    <input type="radio" id="hetero"
           name="orientation" value="hetero">
    <label for="hetero">Hétéro</label>
    <input type="radio" id="homo"
           name="orientation" value="homo">
    <label for="homo">Homo</label>
    <input type="radio" id="bi"
           name="orientation" value="bi">
    <label for="bi">Bi</label>
  </div>
</div>
<input type="submit" value="S'inscrire">

</form>


<?php
require_once "layout/footer.php";