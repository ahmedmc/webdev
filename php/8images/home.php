<!DOCTYPE html>
<html>
	<head>
		<title>Lab 14</title>
	</head>
<body> 
<?php

session_start(); // resume session
if (!(isset($_SESSION['username'])))
	{
		// echo 'Not found';
		header('Location: index.php'); //redirect to login page.
	}
else{
		echo 'Welcome ' . $_SESSION['username'];
		echo "<br />";
		echo "<a href=\"logout.php\">Logout</a>";
	}

?>

</body>
</html> 