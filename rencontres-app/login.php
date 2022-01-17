<?php
$title = "Se connecter";
require_once "layout/header.php";
 ?>   

<h1 class="text-center">S'inscrire sur Rencontres-app</h1>
<form action="login-process.php" method="post">
<label for="pseudo" class="form-label mt-5">Entrez votre pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" class="form-control">
    <label for="password"  class="form-label mt-4">Entrez votre mot de passe :</label>
    <input type="password" name="password" id="password" class="form-control">
    <input type="submit" value="Se connecter">
</form>
<?php
require_once "layout/footer.php";