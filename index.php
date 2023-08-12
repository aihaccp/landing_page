<?php
$host = $_SERVER["HTTP_HOST"];
header("Location: https://{$host}/index.html");

if (strpos($_SERVER['PHP_SELF'], "/index.html") != false) {
    die("Acesso negado");
  }
exit;