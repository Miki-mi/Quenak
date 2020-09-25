<?php
    session_start();
    include "./../database/db.php";


    if(isset($_SESSION["cart"]))  
      {
        $id = $_GET['id'];
                 foreach($_SESSION["cart"] as $p)  
                {  
                     $cartid = $p['item_id'];
                }

                $cartid++; 
            
                $sql = "SELECT * FROM products WHERE id=?";
                $check = $conn->prepare($sql);
                $check->bind_param('i', $id);
                $check->execute();
                $products = $check->get_result(); 
                foreach ($products as $p)
                {
                    $images = $p['productimages'];
                    $productname = $p['productname'];
                    $productprice = $p['productprice'];
                    $calculateprice = $productprice*$productquantity;
                }

                $count = count($_SESSION["cart"]);
                $item_array = array(  
                    'item_id'=>$cartid,
                    'item_productid'=>$id,
                    'item_productimages'=>$p['productimages'],  
                    'item_name'=>$p['productname'],
                    'item_price'=> $p['productprice'],
                    
                ); 
                $cartid = $cartid + 1; 
                $_SESSION["cart"][$count] = $item_array;
                $_SESSION['successcart'] = 'Added to cart!';  
           }  
      

      else  
      {  
            $id = $_GET['id'];
            $cartid = 1;
            $sql = "SELECT * FROM products WHERE id=?";
            $check = $conn->prepare($sql);
            $check->bind_param('i', $id);
            $check->execute();
            $products = $check->get_result(); 
            
            foreach ($products as $p)
            {
                $images = $p['productimages'];
                $productname = $p['productname'];
                $productprice = $p['productprice'];
                $calculateprice = $productprice*$productquantity;
            
            }


            $item_array = array(  
                'item_id'=>$cartid,
                'item_productid'=>$id,
                'item_productimages'=>$p['productimages'],  
                'item_name'=>$p['productname'],
                'item_price'=> $p['productprice'],
           );  
           $_SESSION["cart"][0] = $item_array;
           $_SESSION['successcart'] = 'Added to cart!';  

        
      }  
        
   header("location: ./../cart.php?id=$id");     
    
    
