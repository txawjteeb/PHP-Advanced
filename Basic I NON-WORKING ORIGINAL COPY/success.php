<?php
	session_start();

	// Connecting to the MySQL Database
	include('new_connection.php');
	// $query ="SELECT * FROM people";

	if(isset($_SESSION['success']))
	{
		$display = "The email address you entered (".$_SESSION['email'].") is a VALID email address! Thank you!";
		if(isset($_SESSION['email_data']))
		{
			array_unshift($_SESSION['email_data'], $_SESSION['email']);
		}
		else {
			$_SESSION['email_data']=array();
		}
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

			$new_email_query = "INSERT INTO email (email, email.from, email.to) VALUES ('$data', NOW(), NOW())";
			run_mysql_query($new_email_query);
			$query = "SELECT * FROM email WHERE email = $data ";
			$person = fetch_record($query);




			if(isset($_SESSION['email_data']))
				{
					foreach ($_SESSION['email_data'] as $data)
					{
						echo "<td>".$data."</td>";
						echo "<td>".date('m/d/Y g:i:A')."</td><tr>";
					}
				}
			
			
			?>

		</table>




	</body>
</html>