<?php

require_once 'People.php';

$error = [];

if (isset($_POST["name"], $_POST["firstname"])) {
    if (isset($_FILES["avatar"], $_POST["name"], $_POST["firstname"], $_POST["birthdate"])) {
        var_dump($_FILES["avatar"]["error"]);
        if ($_FILES['avatar'] > $_POST['MAX_FILE_SIZE']) {
            $error[] = 'L\'avatar ne doit pas dépasser 3mo';
        } else {
        }

        // $user = new People();
        // $birthdate = new DateTime($_POST["birthdate"]);
        // $user->addPerson($_POST["avatar"], $_POST["name"], $_POST["firstname"], $birthdate);
    }
} else {
    echo "Les noms et prénoms sont obligatoires.";
?> <a href="ajout.php">Retour au formulaire</a>
<?php
}
