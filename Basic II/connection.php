<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'quoting_dojo');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if ($connection->connect_errno) 
{
    die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
}

function fetch_all($query)
{
	$data = array();
	global $connection;
	$result = $connection->query($query);
	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
	}
	return $data;
}

function fetch_record($query)
{
	global $connection;
	$result = $connection->query($query);
	return $result->fetch_assoc();
}

function run_mysql_query($query)
{
	global $connection;
 	$result = $connection->query($query);
 	return $result;
}

function escape_this_string($string)
{
	global $connection;
	return $connection->real_escape_string($string);
}

?>