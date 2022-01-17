<?php
require_once "User.php";
$p = new User();
$birthdate = new DateTime($_POST["birthdate"]);
$p->register($_POST["pseudo"], $_POST["password"], $birthdate, $_POST["avatar"], $_POST["orientation"] );