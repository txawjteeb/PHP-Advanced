<?php 
	include('new_connection.php');
	$new_person_query = "INSERT INTO people (first_name, last_name, people.from, people.to) VALUES ('David', 'Lee', NOW(), NOW())";
	run_mysql_query($new_person_query);
	$query = "SELECT * FROM people WHERE first_name = 'David' ";
	$person = fetch_record($query);

?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
			echo "<h3> {$person['first_name']} {$person['last_name']}</h3>";

	?>
</body>
</html>