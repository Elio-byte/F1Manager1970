<?php

session_start();

require "config/database.php";

if(isset($_POST["login"])){

$username = $_POST["username"];
$password = $_POST["password"];

$result =
$conn->query(
"SELECT * FROM users
WHERE username='$username'"
);

$user =
$result->fetch_assoc();

if(
$user &&
password_verify(
$password,
$user["password"]
)
){

$_SESSION["user_id"] =
$user["id"];

header(
"Location: dashboard.php"
);

exit;
}

echo "Login fallito";
}
?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username">

<br><br>

<input
type="password"
name="password"
placeholder="Password">

<br><br>

<button name="login">
Login
</button>

</form>
