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
    
    
    
      
   <?php 
   if(!isset($_SESSION['cart']) || $_SESSION['cart'] == NULL)
   {
      $id = $_GET['id'];
      $_SESSION['errorcart'] = "You don't add any item on your cart!";  
      header("location: ./cart.php?id=$id");
   } 
   else 
   { ?>
  
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">

          </div>
        </div>

       
        
          
            <br></br>
            <h2 class="h3 mb-3 text-black font-heading-serif">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              
              <form action="controller/paymentdetailcontroller.php" method="POST">
                    <?php
                        if(isset($_SESSION['coerror']))
                        {
                    ?>
                              <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION['coerror'] ?>
                              </div>
                    <?php
                              unset($_SESSION['coerror']);
                        }
                    ?>
            
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_name" name="name">
                  </div>
                </div>
      
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="address" placeholder="Street address">
                  </div>
                </div>
      
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" name="addressop">
                </div>
      
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_state_country" class="text-black">State / City <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_state_country" name="state">
                  </div>
                  <div class="col-md-6">
                    <label for="c_postal_zip" class="text-black">Post / Zip Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_postal_zip" name="postal">
                  </div>
                </div>
      
                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email_address" name="email">
                  </div>
                  <div class="col-md-6">
                    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="c_phone" name="phone" placeholder="Phone Number" pattern="^[0-9]{7,12}$">
                  </div>
                </div>
    
              
              <div class="form-group">
                <label for="c_order_notes" class="text-black">Order Notes</label>
                <textarea name="notes" id="c_notes" cols="30" rows="5" class="form-control"
                  placeholder="Write your notes here..."></textarea>
              </div>
              
            </div>
          </div>
      

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
    
            <div class="row mb-5">
              <div class="col-md-12">
                <br></br>
                <h2 class="h3 mb-3 text-black font-heading-serif">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>

                   
                  
                    <tbody>
                      
                      <?php 
                        $total = 0;

                        foreach ($_SESSION['cart'] as $p) 
                        { 
                      ?> 
                          <tr>
                            <td><?=$p['item_name'] ?></td>
                            <td><?=$p['item_price'] ?></td>
                          </tr>

                          <?php $total = $total + $p['item_price']; 
                        } 
                      ?>
                          <tr>
                            <td class="text-black font-weight-bold"><strong>Discount</strong></td>
                            <td class="text-black"><?=$discount?></td>
                          </tr>
                          <tr>
                            <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                            <td class="text-black font-weight-bold"><strong><?=$total-$discount?></strong></td>

                          </tr>
                         
                    </tbody>
                  </table>
                  
                  <br></br>
                  <label class="text-black h4" for="payment">Choose your payment gateaway</label>
                  <div class="border mb-3 p-3 rounded">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                        aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
            
                    <div class="collapse" id="collapsebank">
                      <div class="py-2 pl-0">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                      <br></br>
                      <input type="submit" value="Place Order with Bank" class="btn btn-primary btn-lg" >
             
                    </div>
                  </div>
    
                  <div class="border mb-3 p-3 rounded">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                        aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
    
                    <div class="collapse" id="collapsecheque">
                      <div class="py-2 pl-0">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          <br></br>
                          <input type="submit" value="Place Order with Cheque" class="btn btn-primary btn-lg">
                  
                      </div>
                    </div>
                  </div>
    
                  <div class="border mb-5 p-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                        aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
    
                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2 pl-0">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            <br></br>
                          <input type="submit" value="Place Order with Paypal" class="btn btn-primary btn-lg" >
                      </div>
                    </div>

                  </div>
                  </div>
    
                  
    
                </div>
              </div>
            </div>
            </form>

             
          </div>
        </div>
        
      
    
  
<?php } ?>
    
   
    <!-- Include footer.php section -->
    <?php include 'helper/footer.php'; ?>
    

  </div>
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