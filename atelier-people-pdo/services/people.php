<?php
require_once 'db.php';

/**
 * Returns the statement to iterate over after looking for all people in db
 *
 * @return PDOStatement|false
 */
function findAllPeopleStatement(): PDOStatement
{
  $connection = getConnection();
  $query = "SELECT * FROM people";
  return $connection->query($query);
}

/**
 * Add a people to the database
 *
 * @param string $name
 * @param string $firstname
 * @param string $birthdate
 * @return PDOStatement|false
 */
function addPeople(string $name, string $firstname, string $birthdate): PDOStatement
{
  $connection = getConnection();
  $birthdateSqlVal = $birthdate === '' ? 'NULL' : "'" . $birthdate . "'";

  $query = "INSERT INTO people (name, firstname, birthdate) VALUES ('$name', '$firstname', $birthdateSqlVal);";
  return $connection->query($query);
}
