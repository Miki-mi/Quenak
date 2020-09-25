<?php
	session_start();
	session_unset();
	session_destroy();
	unset($_SESSION['csrf_token']);
	unset($_SESSION['cart']);
    unset($_SESSION['active']);
    unset($_SESSION['activecoupon']);
	header("location: ./../index.php");