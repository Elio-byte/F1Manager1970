<?php

session_start();

if(
!isset($_SESSION["user_id"])
){
header("Location: login.php");
exit;
}

$position = rand(1,20);

$prize =
(21 - $position)
* 10000;
?>

<!DOCTYPE html>
<html>
<head>
<title>Gran Premio</title>
</head>
<body>

<h1>Risultato Gara</h1>

<p>
Posizione:
<?php echo $position; ?>
</p>

<p>
Premio:
€<?php echo $prize; ?>
</p>

<a href="dashboard.php">
Torna alla Dashboard
</a>

</body>
</html>
