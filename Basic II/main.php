<?php
session_start();
include('connection.php');

?>


<html>
	<head>
		<title>Quoting Dojo</title>
		<style>
			body {
				width: 700px;
				margin: 0 auto;
				font-family: arial;
			}
			h2 {
				text-align: center;
				padding-top: 30px;
			}
			.right {
				text-align: right;
			}
		</style>
	</head>
	<body>
		<h2>Here are the awesome quotes!</h2>
			<?php

				$query = "SELECT * FROM posts ORDER BY created_at DESC";
				$display = fetch_all($query);
				foreach ($display as $posts)
				{
					$sqldate=$posts['created_at'];
					$date = strtotime($sqldate);
					echo "<p>' {$posts['quote']} '</p>";
					echo "<p class='right'><b>{$posts['name']}</b> at ".date('g:i A F j Y', $date)."</p>";
					echo "<hr>";

				}

			?>



	</body>
</html>