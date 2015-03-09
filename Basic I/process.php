<?php

session_start();
include_once('new_connection.php');
	
	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		$errors=array();
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['email']=$_POST['email'];
			$errors[] = "The email address you entered (".$_SESSION['email'].") is NOT a valid email address!";
			$_SESSION['errors'] = $errors;
			header('location: index.php');
			exit;
		}
		else
		{
			$_SESSION['success'] = "Congratulations, you are good at entering data!";
			$_SESSION['email']=$_POST['email'];
			$new_email_query = "INSERT INTO email (email, created_at, updated_at) VALUES ('{$_SESSION['email']}', NOW(), NOW())";
			run_mysql_query($new_email_query);
			header('location: success.php');
			exit;
		}

	}


?>