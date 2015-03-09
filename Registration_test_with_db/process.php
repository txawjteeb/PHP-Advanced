<?php session_start();

$m="03";
$d="06";
$y="2015";
$date=explode("/", $_POST['birth_date']);
	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		$error = array();
		if(empty($_POST['first_name']) || is_numeric($_POST['first_name']) || ctype_punct($_POST['first_name']))
		{
			$error[]= "Please put your first name. Alphabet characters only.<br>";
		}
		if(empty($_POST['last_name']) || is_numeric($_POST['last_name']) || ctype_punct($_POST['last_name']))
		{
			$error[]= "Please put your last name. Alphabet characters only.<br>";
		}
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$error[]= "Your email address is not valid.<br>";
		}
		if(($_POST['password']) != ($_POST['password2']))
		{
			$error[]= "Please make sure you confirm the same password.<br>";
		}
		if(strlen($_POST['password']) && strlen($_POST['password2']) <7)
		{
			$error[]= "For your security, please enter a password that is more than 6 characters.<br>";
		}
		if(empty($_POST['password']) || empty($_POST['password2']))
		{
			$error[]= "Please enter a password.<br>";
		}
		if(ctype_alpha($date))
		{
			$error[]= "Please input your date of birth in numerals.<br>";
		}
		if(is_numeric($date))
		{
			$error[]= "Date of Birth input is invalid.<br>";
		}
		if(empty($_POST['birth_date']))
		{
			$error[]= "Your date of birth is required.<br>";
		}
		if(count($error)>0)
		{
			$_SESSION['errors'] = $error;
			header('location: index.php');
			exit;
		}
		else 
		{
			$fname = escape_this_string($_POST['first_name']);
			$lname = escape_this_string($_POST['last_name']);
			$email = escape_this_string($_POST['email']);
			$password = escape_this_string(md5($_POST['password']);

			$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at,)";
			run_mysql_query($query);
			$_SESSION['success'] = "USER HAS BEEN REGISTERED YAHHOOO!!!";
			header('location: index.php');
			exit;

		
		}
	}

function login_user($post)
{
	$email = escape_this_string($_POST['email']);
	$password = escape_this_string($_POST['password']);

	$user = fetch_record("SELECT * FROM users WHERE users.email = '{$email}'");
	if (!empty(user))
	{
		if($user['password'] == $password)
		{
			$_SESSION['id'] = $user['id'];
			$_SESSION['name'] = $user['first_name']. " ". $user['last_name'];	
		}
	}
}





?>