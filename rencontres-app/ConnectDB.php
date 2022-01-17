<?php

class ConnectDB
{
    private string $user;
    private string $password ;
    private string $db_name ;
    private string $host;
    private string $charset;

    public function connect()
    {
        $dbConfiguration = parse_ini_file('config/db.ini');
        $this->user = $dbConfiguration['user'];
        $this->password = $dbConfiguration['password'];
        $this->db_name = $dbConfiguration['db_name'];
        $this->host = $dbConfiguration['host'];
        $this->charset = $dbConfiguration['charset'];
        
        try {
            $dsn = "mysql:dbname=" . $this->db_name . "; host=" . $this->host . ";charset=" . $this->charset;
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
