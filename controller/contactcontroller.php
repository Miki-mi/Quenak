<?php
include "./../database/db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    
    if($email == NULL || $fname == NULL || $lname == NULL || $msg == NULL || $phone == NULL)
    {
        $_SESSION['error'] = 'Every form must be filled';
        header("Location: ./../contact.php");
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['error'] = "Email invalid.";
        header("Location: ./../contact.php"); 
    }
    else
    {
        $sql = "INSERT INTO contact(id, fname, lname, email, phone_number,message) VALUES(null, '$fname', '$lname', '$email', '$phone','$msg')";    
        $insert = $conn->prepare($sql);
        $insert->bind_param('ssss', $fname, $lname, $email, $msg);
        $insert->execute();

        $_SESSION['msg'] = 'Thank you for your message!';
        header("location: ./../contact.php");
    }
    
}

?>