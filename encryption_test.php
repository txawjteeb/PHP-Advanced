<?php

$salt = bin2hex(openssl_random_pseudo_bytes(22));

$password = escape_this_string($_POST['password']);
$email = escape_this_string($_POST['email']);
$user_query = "SELECT * FROM users WHERE users.email = '{$email}'";
$user = fetch_record($user_query);
if(!empty($user))
{





$encrypted_password = crypt($password, $user['password']);
if ($user['password'] == $encrypted_password)
{
	echo "Successful Login!";
}
else
{
	echo "Invalid Password!";
}
}
else
{
	echo "Invalid Email!";
}




?>