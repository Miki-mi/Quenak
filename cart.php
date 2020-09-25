<!DOCTYPE html>
<html lang="en">

<?php include 'helper/head.php'; ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <!-- Include header.php section -->
    <?php include 'helper/header.php'; ?>
    <?php include 'database/db.php'; ?>
    
    <div class="site-section  pb-0">
          <div class="container">
            <div class="row mb-5 justify-content-center">
              <div class="col-7 section-title text-center mb-5">
                <h2 class="d-block">Cart</h2>
                <br></br>
              </div>
            </div>
<?php
$total = 0;  
if(!isset($_SESSION['cart']) || $_SESSION['cart'] == NULL )
{  ?>
  <div class="row mb-5">
                <form class="col-md-12" method="POST">
                 <?php if(isset($_SESSION['errorcart']))
                        {
                    ?>
                              <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION['errorcart'] ?>
                              </div>
                    <?php
                              unset($_SESSION['errorcart']);
                        }
                      
                        elseif(isset($_SESSION['msgcart']))
                        {
                    ?>
                              <div class="alert alert-warning" role="alert">
                              <?php echo $_SESSION['msgcart'] ?>
                              </div>
                    <?php
                              unset($_SESSION['msgcart']); 
                        }
                    ?>
                  <div class="site-blocks-table">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                    </table>
                  </form>
                  </div>

<?php 
}

else if(isset($_SESSION['email']) == TRUE)
{ ;
        $id = $_GET['id'];
       ?>      
              <div class="row mb-5">
                <form class="col-md-12" method="POST">
                  <?php
                        
                        if(isset($_SESSION['msgcart']))
                        {
                    ?>
                              <div class="alert alert-warning" role="alert">
                              <?php echo $_SESSION['msgcart'] ?>
                              </div>
                    <?php
                              unset($_SESSION['msgcart']); 
                        }
                        else if(isset($_SESSION['successcart']))
                        {
                    ?>
                              <div class="alert alert-success" role="alert">
                              <?php echo $_SESSION['successcart']; ?>
                              </div>
                    <?php
                              unset($_SESSION['successcart']); 
                        }
                    ?>
                  <div class="site-blocks-table">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          
                         
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                
                            $total = 0;  
                            foreach($_SESSION["cart"] as $p)  
                            {  
                              ?>  
                              <tr>
                                <td class="product-thumbnail">
                                  <img src="<?=$p['item_productimages']?>" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                  <h2 class="h5 cart-product-title text-black"><?=$p['item_name']?></h2>
                                </td>
                                <td><?=$p['item_price']?></td>
                                </td>
                               <td><a href="controller/removecartcontroller.php?action=delete&id=<?=$p['item_id']?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                              </tr>
                              </tr>
                              <?php 
                                    $total = $total + $p["item_price"];

                              } ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
              </div>
          </div>
  <?php }
 else
 {
    $_SESSION['error'] = 'You must login first!';
    header("location: ./account.php");
 }       
 ?>

<?php
    if(isset($_SESSION['active']))
    {
      $discount = 10000;
      
    }
    else
    {
      $discount = 0;  
    }

?>
       


    <div class="site-section pt-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block" onclick="window.location='controller/removecartcontroller.php?action=deleteall'">Remove All</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block" onclick="window.location='./cookies.php'">Continue Shopping</button>
              </div>
              
            </div>
            <br></br>
            <form action="controller/couponcontroller.php?id=<?=$id?>" method="POST">
                  <?php
                  
                      if(isset($_SESSION['invalid']))
                        {
                    ?>
                              <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION['invalid'] ?>
                              </div>
                    <?php
                              unset($_SESSION['invalid']);
                        }
                        else if(isset($_SESSION['removecoupon']))
                        {
                    ?>
                              <div class="alert alert-info" role="alert">
                              <?php echo $_SESSION['removecoupon'];
                              ?>
                              </div>
                    <?php
                              unset($_SESSION['removecoupon']);
                              unset($_SESSION['couponerror']);
                              unset($_SESSION['activecoupon']);
                        } 
                        else if(isset($_SESSION['activecoupon']) && isset($_SESSION['couponerror']) == FALSE)
                        {
                    ?>
                            <div class="alert alert-info" role="alert">
                            <?php echo $_SESSION['activecoupon']; ?>
                            
                            </div>   
                    <?php
                            unset($_SESSION['activecoupon']);         
                        }
                        else if(isset($_SESSION['couponerror']) && isset($_SESSION['activecoupon']) == TRUE)
                        {
                    ?>
                              <div class="alert alert-warning" role="alert">
                              <?php echo $_SESSION['couponerror'];
                              ?>
                              </div>
                    <?php
                              unset($_SESSION['couponerror']);
                        }
                    ?>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" name="couponname" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
              </div>
              <br></br>
            </div>
          </div>
        </form>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <br></br>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?=$total?></strong>
                  </div>
                  <div class="col-md-6">
                    <span class="text-black">Discount Coupon </span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?=$discount?></strong>
                  </div>
                </div>
                <br></br>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='./checkout.php'">Proceed To
                      Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-md px-4" onclick="window.location='controller/removecouponcontroller.php'"">Remove Coupon</button>
      </div>
    </div>
</div>

  
            

            
          
      
  
    
    <!-- Include footer.php section -->
    <?php include 'helper/footer.php'; ?>
    

  
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>