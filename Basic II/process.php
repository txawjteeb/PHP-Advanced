<?php
session_start();
include('connection.php');

$query = "SELECT * FROM posts";
$display = fetch_all($query);

	if(isset($_POST['skip']) && ($_POST['skip']) == 'Skip to quotes!')
	{
		header('location: main.php');
		exit;
	}
	if(isset($_POST['action']) && ($_POST['action']) == 'register')
	{
		$display=array();
		if(empty($_POST['name']) || empty($_POST['quote']))
		{
			$display[]="Please enter in both your quote and your full name.";
			$_SESSION['error']=$display;
			header('location: index.php');
			exit;
		}
		else if (isset($_POST['submit']) && ($_POST['submit']) == 'Add my quote!')
		{
			$_SESSION['name']=$_POST['name'];
			$_SESSION['quote']=$_POST['quote'];
			$new_query = "INSERT INTO posts (name, quote, created_at, updated_at) VALUES ('{$_POST['name']}','{$_POST['quote']}', NOW(), NOW())";
			run_mysql_query($new_query);
			header('location: main.php');
			exit;
		}
	}





?>