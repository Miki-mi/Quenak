<?php
include "./../database/db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $addressop = $_POST['addressop'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];

    
    if($email == NULL || $name == NULL || $postal == NULL || $address == NULL|| $state == NULL || $phone == NULL)
    {
        $_SESSION['coerror'] = 'Every form with * must be filled';
        


        header("Location: ./../checkout.php");
    }
    
    else
    {
        $sql = "INSERT INTO paymentdetail(id, name, address, addressop, state, postal, email, phone, notes) VALUES(null, '$name', '$address', '$addressop', '$state', '$postal', '$email', '$phone', '$notes')";
        $insert = $conn->prepare($sql);
        $insert->bind_param('ssssssss', $name, $address, $addressop, $state, $postal, $email, $phone, $notes);
        $insert->execute();    
        $result = $conn->query($sql);
        header("location: ./../bukti.php");
    }
    
}

