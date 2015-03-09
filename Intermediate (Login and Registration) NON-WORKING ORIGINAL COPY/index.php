<?php
	session_start();
?>

<html>
<head>
	<title>Login and Registration</title>
	<style type="text/css">
		*
		{
			font-family: sans-serif;
		}
		.error {
			color: red;
		}
		.success {
			color: green;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_SESSION['errors']))
		{
			foreach ($_SESSION['errors'] as $error)
			{
				echo "<p class='error'> {$error} </p>";
			}
			unset($_SESSION['errors']);
		}

		if(isset($_SESSION['success_message']))
		{
			echo "<p class='success'>{$_SESSION['success_message']} </p>";
			unset($_SESSION['success_message']);
		}

	?>
	<h2>Register</h2>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="register">
		First Name: <input type="text" name="first_name"><br>
		Last Name: <input type="text" name="last_name"><br>
		Email Address: <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>
		Confirm Password: <input type="password" name="confirm_password"><br>
		<input type="submit" value="Register">
	</form>
	<h2>Login</h2>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="login">
		Email Address: <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>