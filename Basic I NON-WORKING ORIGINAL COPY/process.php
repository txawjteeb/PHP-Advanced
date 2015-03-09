<?php

session_start();

	
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
			header('location: success.php');
			exit;
		}

	}


?>