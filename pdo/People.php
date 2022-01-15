<?php

require_once "ConnectDB.php";

class People extends ConnectDB
{
    private int $id;
    private string $avatar;
    private string $name;
    private string $firstname;
    private DateTime $birthdate;


    public function connect()
    {
        $pdo = new ConnectDB();
        return  $pdo->connect();
    }

    public function getPeopleList()
    {
        $query = "SELECT * FROM people";
        $stmt = $this->connect()->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $list[] = $row;
        }
        return $list;
    }

    public function addPerson(string $avatar, string $name, string $firstname, DateTime $birthdate)
    {
        $this->avatar = $avatar;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->birthdate = $birthdate;
        $sql = "INSERT INTO people (avatar, name, firstname, birthdate) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->avatar,  $this->name, $this->firstname, $this->birthdate->format('Y-m-d')]);
    }
}
