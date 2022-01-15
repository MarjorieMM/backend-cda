<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un utilisateur</title>
    <link rel="stylesheet" href="assets/pdo.css">
</head>

<body>
    <header>
        <a href="liste.php">
            <= Revenir à la liste</a>
    </header>
    <main>
        <form action="add-user.php" method="POST" enctype="multipart/form-data" class="form">
            <div class="input">
                <label for="avatar">Choisir un avatar :</label>
                <input type="file" name="avatar" id="avatar">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            </div>
            <div class="input">
                <label for="name">Entrez votre nom :</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="input">
                <label for="firstname">Entrez votre prénom :</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="input">
                <label for="birthdate">Entrez votre date de naissance :</label>
                <input type="date" name="birthdate" id="birthdate">
            </div>
            <div class="input">
                <input type="submit" value="OK">
            </div>
        </form>
    </main>
</body>



</html>