<?php
session_start();


?>

<html>
	<head>
		<title>Quoting Dojo</title>
		<style>
			body {
				width: 700px;
				margin: 0 auto;
				font-family: arial;
				background-image: url(https://pbs.twimg.com/profile_images/528547866738823168/MIZvOO7u.jpeg);
				background-repeat: no-repeat;
				background-position: top;
			}
			h1 {
				padding-top: 30px;
				text-align: center;
			}
			textarea {
				font-size: 14px;
				opacity: .7;
			}
				.wide {
					height: 25px;
					width: 190px;
					font-size: 14px;
					opacity: .7;
				}
				.button {
					width: 140px;
					height: 30px;
					border: 1px solid black;
				}
				.error {
					text-align: center;
					color: red;
					font-family: times;
					font-style: italic;
				}
				.red {
					color: red;
				}
			#big {
				width: 450px;
				height: 250px;
				font-size: 14px;
			}
			#left-top {
				vertical-align: text-top;
			}
			#button_1 {
				margin-top: 30px;
				margin-left: 50px;
				background-color: red;
				opacity: .8;
			}
			#button_2 {
				margin-left: 270px;
				background-color: black;
				color: white;
				opacity: .8;
			}

		</style>
	</head>
	<body>
		<h1>Welcome to <span class="red">Quoting</span> Dojo</h1>
		
			<?php
				if(isset($_SESSION['error']))
				{
					foreach ($_SESSION['error'] as $error)
					{
						echo "<p class='error'>".$error."</p>";
					}
				}
				session_unset();
			?>

		<form action="process.php" method="post">
			<table>
				<div>
					<td>Your Name:</td>
					<td><input class="wide" type="text" name="name"></td><tr>
				</div>
				<div id="quote_box">
					<td id="left-top">Your Quote:</td>
					<td>
						<textarea name="quote" rows="15" cols="65"></textarea>
					</td>
				</div>
			</table>
			<input class="button" id="button_1" type="submit" name="submit" value="Add my quote!">
			<input class="button" id="button_2" type="submit" name="skip" value="Skip to quotes!">
			<input type="hidden" name="action" value="register">
		</form>



	</body>
</html>