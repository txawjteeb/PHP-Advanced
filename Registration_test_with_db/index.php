<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration without DB</title>
	<style>
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
		h1 {
			text-align: center;
		}
		input {
			width: 180px;
		}
		#register {
			width: 90px;
			margin-left: 250px;
			margin-top: 35px;
			
		}
		#info {
			margin: 0 auto;
			width: 400px;
			color: red;
			/*border: 1px solid black;*/
			padding: 18px 18px 18px 70px;
			font-weight: bold;
			font-style: italic;
		}
		#info2 {
			/*border: 1px solid black;*/
			margin: 0 auto;
			padding: 18px;
			width: 400px;
			font-weight: bold;
			color: green;
		}
	</style>
	</head>
	<body>
		<h1>Registration without DB</h1>
			<?php if(isset($_SESSION['errors']))
			{	echo "<div id='info'>";
				foreach ($_SESSION['errors'] as $error)
				{
					echo "$error<br>";
				}
				echo "</div>";
				unset($_SESSION['errors']);
			}
			else if(isset($_SESSION['success']))
			{
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			} ?>
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
				<td><input type="password" name="password" placeholder="Password"></td>
				<tr></tr>
				<td>Confirm Password: </td>
				<td><input type="password" name="password2" placeholder="Confirm Password"></td>
				<tr></tr>
				<td>Date of Birth: </td>
				<td><input type="text" name="birth_date" minlength="6" maxlength="10" placeholder="(MM/DD/YYYY)"></td>
				<tr></tr>
				<!-- <td>Upload Profile Image: </td><tr></tr>
				<div id="profile">
					
				</div>
				<td><input type="file" name="image" accept="image/*" placeholder="Upload File"></td> -->
			</table>
			<input id="register" type="submit" name="submit">
			<input type="hidden" name="action" value="register">
		</form>
	



	</body>
</html>