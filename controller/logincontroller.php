<?php
include "./../database/db.php";
include "./gettoken.php";

if(!isset($error)) 
{ 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email=?";
        $login = $conn->prepare($sql);
        $login->bind_param('s', $email);
        $login->execute();
        $result = $login->get_result(); 

        session_start();

        if($row = $result->fetch_assoc())
        {
            //echo " Login success";

            $dbPassword = $row['password'];
            $userid = $row['userid'];
            if(password_verify($password, $dbPassword) == true)
            {
                echo $_SESSION['email'];
                session_regenerate_id();
                $_SESSION['email'] = $email;  
            
                header("location: ./../index.php?userid=$userid");
            }
            else
            {
                $_SESSION['error'] = 'Invalid email or password';
                header("location: ./../account.php");
            }   
        }
        

        else
        {
            //echo "Login Failed";
            $_SESSION['error'] = 'Invalid email or password';
            header("location: ./../account.php");
        }
    }
}

?>