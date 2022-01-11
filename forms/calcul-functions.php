<?php
function isFormSubmitted(): bool
{
  return isset($_GET['nb1']) && isset($_GET['nb2']) && isset($_GET['operator']);
}

function validateOperands($nb1, $nb2): bool
{
  return is_numeric($nb1) && is_numeric($nb2);
}

function validateOperator(string $operator): bool
{
  $operators = ['+', '-', '*', '/'];
  $operatorKey = array_search($operator, $operators);
  return $operatorKey !== false;
}

/**
 * Calculate a result based on given operands & operator
 * Returns false if operator is not valid
 *
 * @param mixed $nb1
 * @param string $operator
 * @param mixed $nb2
 * @return mixed
 */
function calculate($nb1, string $operator, $nb2)
{
  if (!validateOperator($operator)) {
    return false;
  }

  switch ($operator) {
    case '+':
      $result = $nb1 + $nb2;
      break;
    case '-':
      $result = $nb1 - $nb2;
      break;
    case '*':
      $result = $nb1 * $nb2;
      break;
    case '/':
      $result = $nb1 / $nb2;
      break;
    default:
      return false;
  }

  return $result;
}
