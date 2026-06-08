<?php

session_start();

if(
!isset($_SESSION["user_id"])
){
header("Location: login.php");
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>

<h1>Formula Team Manager 1970</h1>

<h2>Dashboard</h2>

<p>Budget: €10.000.000</p>

<p>Fabbrica: Livello 1</p>

<p>Personale: 10</p>

<p>Auto: 2</p>

<br>

<a href="race.php">
Simula Gara
</a>

</body>
</html>
