<?php
    session_start();
 	include "./../database/db.php";

    $id = isset($_GET['id']) ? $_GET['id'] : "";
   
    if(isset($_GET['action']))  
 	  {  
      if($_GET['action'] == "delete")  
      {  
           foreach($_SESSION['cart'] as $keys => $p)  
           {  
                if($p['item_id'] == $_GET['id'])  
                {  
                     unset($_SESSION['cart'][$keys]);  
                     $_SESSION['msgcart'] = 'Item Removed!';
                     
                }  
           }  
      }
      elseif($_GET['action'] == "deleteall")
      {
        unset($_SESSION['cart']);
        $_SESSION['msgcart'] = 'Item Removed!';

      }  
     
    }

 
    header("Location: ./../cart.php?id=$id");
?>