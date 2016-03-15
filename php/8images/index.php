<!DOCTYPE html>
<html>
	<head>
		<title>Lab 14</title>
	</head>
<body> 

<?php 

	session_start(); // Starts sesion

	if (isset($_SESSION['username'] )) // Checks if there's already a session

		{
			echo "<a href=\"logout.php\">Logout</a>"; // link to logout page if username is already in session.
		}
	
	else // if usernae has no session, displays login form.
		{ 	
			echo "<form action=\"\" method=\"POST\" name=\"lab12\"> "; // post to self
			echo "User Name: <input type=\"text\" name=\"username\" ><br/> ";
			echo "Password: <input type=\"text\" name=\"pw\"><br/>";
			echo "<input type=\"submit\" name=\"submit\" value=\"send\"> ";
			echo "</form>";
			
		}

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))  // check if form was posted
		{
		if  ($_POST['pw'] == 'p' && ($_POST['username'] == 'c')) // password validation
			{
				$_SESSION['username'] = $_POST['username']; //sets session to username post.
				header('Location: home.php'); //redirect to home page.
			}
		else
			{	
				header('Location: index.php'); //redirect to login page.
			}
		}

?>

</body>
</html> 

