<?php
	session_start();
	echo "<h2>Howdy, {$_SESSION['first_name']} {$_SESSION['last_name']}! </h2><br><br><br><br>";
	echo ".........well uhhh...this is pretty much it.<br>";
	echo "Hit 'LOG OFF!' to get out of here and back to Login and Registration page!<br><br><br>";
	echo "<a href='process.php'>LOG OFF! </a>";


?>

<html>
<head>
	<title>Successful Login</title>
</head>
<body>
	<style>
		body {
			width: 900px;
			margin: 0 auto;
			text-align: center;
		}
		a {
			text-decoration: none;
			border: 1px solid black;
			padding: 8px;
			background-color: grey;
		}
	</style>
</body>
</html>