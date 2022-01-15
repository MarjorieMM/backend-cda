<?php

class ConnectDB
{
    private string $user = "wf3-php";
    private string $password = "jarvis";
    private string $db = "wf3-php";
    private string $host = "127.0.0.1";
    private string $charset = "utf8mb4";

    public function connect()
    {
        try {
            $dsn = "mysql:dbname=" . $this->db . "; host=" . $this->host . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->user, $this->password);
            return $pdo;
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
    }
}
