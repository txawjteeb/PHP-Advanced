<?php
	session_start();
?>

<html>
<head>
	<title>Login and Registration</title>
	<style type="text/css">
		body {
			width: 600px;
			margin: 0 auto;
		}
		table {
			margin: 0 auto;
		}
		td {
			padding-top: 10px;
		}
		h2 {
			margin-top: 35px;
			text-align: center;
		}
		input {
			width: 180px;
		}
		.button {
			width: 90px;
			margin-left: 250px;
			margin-top: 35px;
			
		}
		.error {
			margin-top: 10px;
			color: red;
			text-align: center;
			line-height: 60%;
		}
		.success {
			margin-top: 10px;
			text-align: center;
			line-height: 60%;
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

		if(isset($_SESSION['success']))
		{
			echo "<p class='success'>{$_SESSION['success']} </p>";
			unset($_SESSION['success']);
		}

	?>
	<h2>Register</h2>
		<form action="process.php" method="post">
			<table>
				<td>First Name: </td>
				<td><input type="text" name="first_name" placeholder="First Name"></td>
				<tr></tr>
				<td>Last Name: </td>
				<td><input type="text" name="last_name" placeholder="Last Name"></td>
				<tr></tr>
				<td>Email Address: </td>
				<td><input type="text" name="email" placeholder="Email Address"></td>
				<tr></tr>
				<td>Password: </td>
				<td><input type="password" minlength="6" name="password" placeholder="Password"></td>
				<tr></tr>
				<td>Confirm Password: </td>
				<td><input type="password" name="confirm_password" placeholder="Confirm Password"></td>
			</table>
			<input class="button" type="submit" name="Register">
			<input type="hidden" name="action" value="register">
		</form>
		<br>
		<br>
		<h2>Login</h2>
		<form action="process.php" method="post">
			<table>
				<td>Email Address: </td>
				<td><input type="text" name="email" placeholder="Email Address"></td>
				<tr></tr>
				<td>Password: </td>
				<td><input type="password" name="password" placeholder="Password"></td>
				<tr></tr>
			</table>
			<input class="button" type="submit" name="Login">
			<input type="hidden" name="action" value="login">
		</form>
</body>
</html>