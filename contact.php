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


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="section-title mb-5">
              <h2>Contact Us</h2>
            </div>
            <form action="controller/contactcontroller.php" method="POST">
                  <?php
                        if(isset($_SESSION['error']))
                        {
                    ?>
                              <div class="alert alert-warning" role="alert">
                              <?php echo $_SESSION['error'] ?>
                              </div>
                    <?php
                              unset($_SESSION['error']);
                        } 
                        else if (isset($_SESSION['msg']))
                        {
                    ?>
                              <div class="alert alert-success" role="alert">
                              <?php echo $_SESSION['msg'] ?>
                              </div>
                    <?php
                              unset($_SESSION['msg']); 
                        }
                    ?>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="fname">Name</label>
                          <input type="text" id="fname" name="fname" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" id="lname" name="lname" class="form-control form-control-lg">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress">Email Address</label>
                          <input type="email" id="eaddress" name="email" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel">Tel. Number</label>
                          <input type="tel" id="tel" name="phone" class="form-control form-control-lg" pattern="^[0-9]{7,12}$">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="message">Message</label>
                          <textarea name="msg" id="message" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

  

    
    
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