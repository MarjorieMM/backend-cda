<?php

$dsn = "mysql:dbname=wf3-php; host=127.0.0.1;charset=utf8mb4";
$user = "wf3-php-2";
$password = "-[@q/ZZ1(v7Tf1_C";


// $pdo = new PDO($dsn, $user, $password);

try {
    $pdo = new PDO($dsn, $user, $password);
    var_dump($pdo);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données<br/>";
    switch ($e->getCode()) {
        case 1845:
            echo "Identifiants incorrects";
            break;
        case 2019:
            echo "Jeu de caractères inconnu";
        default:
            echo "Une erreur est survenue";
            break;
    }
    exit;
}

$query = "SELECT * FROM people";
$stmt = $pdo->query($query);
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($stmt);


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}
