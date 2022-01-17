<?php
// session_start va démarrer ou récupérer une session existante
// PHP va créer un identifiant de session
// et le mettre dans un cookie => PHPSESSID
// header.php
session_start();
// products.php
session_start();

var_dump($_SESSION);
