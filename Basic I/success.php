<?php
	session_start();

	// Connecting to the MySQL Database
	include('new_connection.php');

	if(isset($_SESSION['success']))
	{
		$display = "The email address you entered (".$_SESSION['email'].") is a VALID email address! Thank you!";
	}
	else
	{
		header('location: index.php');
		exit;
	}

?>

<html>
	<head>
	</head>
		<style>
			body {
				width: 500px;
				margin: 0 auto;
				padding-top: 80px;
			}
			div {
				text-align: center;
				width: 500px;
				border: 1px solid black;
				background-color: green;
				font-size: 30px;
			}
			h2 {
				text-decoration: underline;
				display: block;
				text-align: left;
			}
			table {
				margin-left: 40px;
			}
			td {
				width: 240px;
			}

		</style>
	<body>
		<div>
			<p><?= $display ?></p>
		</div>
		<h2>Email Addresses Entered:</h2>
		<table>

			<?php

			
			$query = 'SELECT * FROM email';
			$result = fetch_all($query);
				foreach ($result as $data)
				{
					echo "<td>{$data['email']}</td>";
					echo "<td>{$data['created_at']}</td><tr>";
				}
			
			
			?>

		</table>




	</body>
</html>