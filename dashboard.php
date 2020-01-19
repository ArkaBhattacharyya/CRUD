<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
 
<h1><?php echo 'welcome, ' . $_SESSION["arka"]; ?></h1>
<a href="logout.php">Logout</a>
</body>
</html>