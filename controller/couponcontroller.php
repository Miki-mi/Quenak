<?php
    
    include "./../database/db.php";

        $id = $_GET['id'];
        $name = $_POST['couponname'];
        $sql = "SELECT * FROM coupon";
        $result = $conn->query($sql);

        session_start();

        if($result->num_rows > 0)
        {
            echo 'masuk';
            foreach ($result as $p) 
            {
                
                if($_SESSION['active'] != NULL)
                {
                    $_SESSION['couponerror'] = 'You only can use 1 coupon for 1 transaction!';
                    
                }
                else if($p['couponname'] == $name)
                {
                    echo 'sama';
                    $_SESSION['active'] = 'Coupon activated successfully';
                    $_SESSION['activecoupon'] = 'Coupon activated successfully';
                    
                }
                else
                {
                    echo 'invalid';
                    $_SESSION['invalid'] = 'Invalid coupon';
                }
            }

            

        }
        
        
    header("location: ./../cart.php?id=$id");