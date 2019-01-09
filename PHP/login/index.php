<?php
session_start();
if(!isset($_SESSION['Login'])){
	header('Location: login.php');
}
?>

<!doctype html>	
<html>
	<head>
	<title>githib</title>
	</head>
	<body>
	<h1>first heading</h1>
	<a href="logout.php">Logout</a>
	</body>
</html>