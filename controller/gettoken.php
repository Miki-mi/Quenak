<?php 

	$token=md5(uniqid(rand(), TRUE));

	$_SESSION['csrf_token'] = $token;

	if(isset($_POST) & !empty($_POST))
	{
		$msg = "validation success";
	} 
	else
	{
		$error = "CSRF token validation failed";
	}
