<?php
	session_start();
	require('connection.php');

	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		//call to function
		register_user($_POST); //use the ACTUAL POST!
	}

	else if(isset($_POST['action']) && $_POST['action'] == 'login')
	{
		login_user($_POST);
	}
	else 	//malicious navigation to process.php OR someone is trying to log off!
	{
		session_destroy();
		header('location: index.php');
		exit;
	}

	function register_user($post) //just a parameter called post
	{
	///--------------------begin validation checks-----------------///
		$_SESSION['errors']=array();

		if (empty($post['first_name']) || is_numeric($_POST['first_name']) || ctype_punct($_POST['first_name']))
		{
			$_SESSION['errors'][] = "Please input your first name. Alphabet characters only.";
		}
		if (empty($post['last_name']) || is_numeric($_POST['last_name']) || ctype_punct($_POST['last_name']))
		{
			$_SESSION['errors'][] = "Please input your last name. Alphabet characters only.";
		}
		if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errors'][] = "Please use a valid email address!";
		}
		if (empty($post['password']))
		{
			$_SESSION['errors'][] = "Password field is required!";
		}
		if ($post['password'] !== $post['confirm_password'])
		{
			$_SESSION['errors'][] = "Passwords must match!";
		}
		if(strlen($post['password']) && strlen($post['confirm_password']) <7)
		{
			$error[]= "For your security, please enter a password that is more than 6 characters.<br>";
		}

		if(count($_SESSION['errors']) >0)
		{
			header('location: index.php');
			exit;
		}
		else
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			$_SESSION['success'] = 'User Successfully created!';
			header('location: index.php');
			exit;
		}

	}

	function login_user($post) //just a parameter called post
	{
		$query = "SELECT * FROM users WHERE users.password = '{$post['password']}' AND users.email = '{$post['email']}'";
		$user = fetch_all($query);   //go and attempt to grab user with above credentials!
		if(count($user) >0)
		{
			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['first_name'] = $user[0]['first_name'];
			$_SESSION['last_name'] = $user[0]['last_name'];
			$_SESSION['logged_in'] = TRUE;
			header('location: success.php');
			exit;
		}
		else
		{
			$_SESSION['errors'][] = "Your Email Address and Password combination does not match info in database. Try Again.";
			header('location: index.php');
			exit;
		}
	}
?>