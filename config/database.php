<?php

$host = "localhost";
$user = "USERNAME_DATABASE";
$pass = "PASSWORD_DATABASE";
$db = "NOME_DATABASE";

$conn = new mysqli(
    $host,
    $user,
    $pass,
    $db
);

if ($conn->connect_error) {
    die("Errore connessione database");
}
?>
