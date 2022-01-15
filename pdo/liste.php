<!-- (utilisateurs = table people)
Créez une page qui va afficher tous les utilisateurs, mais en affichant un vrai template plutôt qu'un var_dump.
Vous afficherez une image par défaut pour tous les utilisateurs qui ont un avatar à NULL.
Ensuite, vous créerez une page d'ajout d'utilisateur présentant un formulaire avec le nom, le prénom et la date de naissance (sans avatar, ou bien si vous êtes curieux ou que vous avez déjà fait de l'upload de fichier, alors mettez un avatar).
A la soumission du formulaire, une requête d'insertion sera générée par le script cible du formulaire, afin d'insérer un nouvel utilisateur dans la table people.
Au total, vous aurez donc 2 pages : liste + ajout.
Merci de créer un menu qui apparaîtra dans les 2 pages avec "Liste" et "Ajouter un utilisateur".
Vous pouvez utiliser des classes. -->
<?php
require_once 'People.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="assets/pdo.css">
</head>

<body>
    <header>
        <a href="ajout.php">Ajouter un utilisateur</a>
    </header>
    <main>
        <section class="list">
            <?php
            $p = new People();
            $users = $p->getPeopleList();
            foreach ($users as $user) {
                require 'user-card.php';
            } ?>
        </section>
    </main>
</body>

</html>