<?php

require "config/database.php";

if(isset($_POST["register"])){

$username = $_POST["username"];

$password = password_hash(
$_POST["password"],
PASSWORD_DEFAULT
);

$sql = "INSERT INTO users
(username,password)
VALUES
('$username','$password')";

$conn->query($sql);

echo "Registrazione completata";
}
?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<br><br>

<input
type="password"
name="password"
placeholder="Password"
required>

<br><br>

<button name="register">
Registrati
</button>

</form>
