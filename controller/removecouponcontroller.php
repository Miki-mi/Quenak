<?php
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : "";
unset($_SESSION['active']);
unset($_SESSION['activecoupon']);
$_SESSION['removecoupon'] = 'Coupon Removed';
header("location: ./../cart.php?id=$id");
