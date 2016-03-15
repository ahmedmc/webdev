<!DOCTYPE html>
<html>
	<head>
		<title>Lab 14</title>
	</head>
<body> 

<?php
	session_start(); // resume session
	unset($_SESSION["username"]);
	$_SESSION = array(); // reset array for this session
	session_destroy(); // destroy the session
	header('Location: index.php'); //redirect to login page.
?>

</body>
</html> 

