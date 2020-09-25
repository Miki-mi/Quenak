<?php
include "./../database/db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    

    $check_user_query = "SELECT 1 FROM user WHERE email=?";
    $check_user = $conn->prepare($check_user_query);
    $check_user->bind_param("s", $email);
    $check_user->execute();
    $result = $check_user->get_result();

    if($user_data = $result->fetch_assoc())
    {
        $_SESSION['registererror'] = 'email has already taken. Please enter another email';
        header("Location: ./../account.php");        
    }
    else if($name == NULL || $email == NULL || $password == NULL || $repassword == NULL)
    {
    	$_SESSION['registererror'] = 'Every form must be filled!';
        header("Location: ./../account.php");
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['registererror'] = "Email invalid.";
        header("Location: ./../account.php"); 
    }
    elseif ($password != $repassword) 
    {
    	$_SESSION['registererror'] = 'Password not same!';
        header("Location: ./../account.php");
    }
    else
    {
	    $hash_password = password_hash($password, PASSWORD_BCRYPT); //GENERATES RANDOM SALT

	    $sql = "INSERT INTO user VALUES(null,? , ?, ?)";    
	    $register = $conn->prepare($sql);
        $register->bind_param('sss', $name, $email, $hash_password);
        $register->execute();
        $_SESSION['msg'] = 'Register Success!';
	    header("location: ./../account.php");
    }
    
}

?>