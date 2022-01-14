<?php
require_once 'db.php';

/**
 * Returns the statement to iterate over after looking for all people in db
 *
 * @return PDOStatement|false
 */
function findAllPeopleStatement(): PDOStatement|false
{
  $connection = getConnection();
  $query = "SELECT * FROM people";
  return $connection->query($query);
}

function addPeople(string $name, string $firstname, string $birthdate): PDOStatement|false
{
  $connection = getConnection();
  $birthdateSqlVal = $birthdate === '' ? 'NULL' : "'" . $birthdate . "'";

  $query = "INSERT INTO people (name, firstname, birthdate) VALUES ('$name', '$firstname', $birthdateSqlVal);";
  return $connection->query($query);
}
