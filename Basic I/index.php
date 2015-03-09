<?php
	session_start();
?>
<html>
<head>
	<title>Email Validation without DB</title>
	<style>
		body {
			width: 500px;
			margin: 0 auto;
			text-align: center;
			padding-top: 80px;
		}
		form {
			margin: 0 auto;
		}
		input {
			margin: 13px 0px;
		}
		div {
			width: 500px;
			background-color: red;
			font-size: 30px;
			}
		#bar {
			width: 300px;
			height: 25px;
		}
		#submit {
			margin-left: 246px;
		}
	</style>
</head>
<body>
	<div>
		<?php
			if(isset($_SESSION['errors']))
			{
				foreach ($_SESSION['errors'] as $error)
				{
					echo "<p> $error </p>";
				}
				unset($_SESSION['errors']);
			}
		?>
	</div>
	<h2>Please enter your email address:</h2>
	<form action="process.php" method="post">
		<input type="text" name="email" id="bar" placeholder="Email Address"><br>
		<input type="submit" id="submit" value="Submit">
		<input type="hidden" name="action" value="register">
	</form>
</body>
</html>