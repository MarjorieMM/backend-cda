<?php
class AlertLevel
{
  const DANGER = 'danger';
  const SUCCESS = 'success';
}

function displayAlert(string $level, string $message): void
{
  echo "<div class=\"alert alert-$level\" role=\"alert\">$message</div>";
}
