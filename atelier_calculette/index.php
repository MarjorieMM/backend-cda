<?php

function calculate($numA, $numB, $op)
{
    switch ($op) {
        case '+':
            return $numA + $numB;
        case '-':
            return $numA - $numB;
        case '*':
            return $numA * $numB;
        case '/':
            if ($numB == 0) {
                return "Division par zéro impossible";
            } else {
                return $numA / $numB;
            }
        default:
            echo "Pas d'opérateur sélectionné";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculatrice</title>
    </head>

    <body>
        <form action="index.php" method="POST">
            <input type="text" name="numA" id="numA" />
            <select name="operator" id="operator">
                <option value="">opérateur</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="numB" id="numB" />
            <input type="submit" value="Calculer" />
        </form>
    </body>
    <?php
if (isset($_POST['numA']) && isset($_POST['numB']) && isset($_POST['operator'])) {
    if (!is_numeric($_POST['numA']) || !is_numeric($_POST['numB'])) {
        echo "error";
    } else {
        echo calculate($_POST['numA'], $_POST['numB'], $_POST['operator']);
    }
}; ?>

</html>