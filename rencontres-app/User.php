<?php

require_once "ConnectDB.php";

class User extends ConnectDB {

    private int $id;
    private string $pseudo;
    private string $password;
    private ?string $birthdate = null;
    private ?DateTime $birthDate;
    private ?string $avatar = null;
    private ?string $orientation = null;

public function __construct()
{
  if ($this->birthdate !== null) {
    $this->birthDate = new DateTime($this->birthdate);
  } else {
    $this->birthDate = null;
  }
}

public function connect()
{
    $pdo = new ConnectDB();
    return  $pdo->connect();
}

public function getUsersList()
{
    $query = "SELECT * FROM rencontres";
    $stmt = $this->connect()->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $list[] = $row;
    }
    return $list;
}

public function register(string $pseudo, string $password, DateTime $birthdate, string $avatar, string $orientation)
{
  $sql = "INSERT INTO rencontres (pseudo, password, birthdate, avatar, orientation) VALUES (?,?,?,?,?)";
  $stmt = $this->connect()->prepare($sql);
  $pass = password_hash($password, PASSWORD_ARGON2I);
  $stmt->execute([$pseudo,  $pass,  $birthdate->format('Y-m-d'), $avatar, $orientation]);
}

public function login(string $pseudo, string $password)
{
  
}

    public function getId() : int
    {
        return $this->id;
    }


    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }


    public function setPseudo($pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

 
    public function setPassword($password): self
    {
        $this->password =  $password;

        return $this;
    }


    public function getBirthDate() : ?DateTime
    {
        return $this->birthDate;
    }

    
    public function setBirthDate(?DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }


    public function getAvatar() : ?string
    {
        return $this->avatar;
    }


    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getOrientation() : ?string
    {
        return $this->orientation;
    }


    public function setOrientation($orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }
}