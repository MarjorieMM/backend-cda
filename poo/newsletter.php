<?php
require_once 'Email.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="poo_style.css">
</head>

<body>

    <div class="newsletter">
        <h3>Inscription à la newsletter</h3>
        <form action="newsletter.php" method="POST">
            <label for="email">Entrez votre email :</label>
            <input type="text" class="text" name="email">
            <input type="submit" value="Valider" />
        </form>
    </div>

    <?php
    if (isset($_POST["email"])) {
        $valid = new Email($_POST["email"]);
        if ($valid->checkValidEmail() === false) {
    ?> <div class="invalid response"> <?php
                                        echo "Votre adresse email n'est pas valide";
                                    } else {
                                        if ($valid->checkSpamEmail() === true) {
                                        ?> <div class="invalid response"> <?php echo "Votre adresse email est du spam";
                                        } else {   ?> <div class="valid response"> <?php echo "Votre adresse email est valide";
                                                                                                                            }
                                                                                                                        }
                                                                                                                    } ?>
                        </div>
</body>

</html>