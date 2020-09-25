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
    
<?php $orderid=uniqid(rand(), TRUE);
  
?>
        
  <form action="controller/bukticontroller.php" method="POST" enctype="multipart/form-data">

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <input type="hidden" name="orderid" value="<?php echo $orderid; ?>">
            <h2 class="display-5 text-black font-heading-serif">Your order id: <?=$orderid?></h2>
            <br></br>
            <p class="lead mb-5">Upload your proof of payment</p>
            <br></br>
            <input type="file" name="transferimage" class="height-auto" id="inputFile" required="">
            <br></br>
            <button class="btn btn-lg btn-primary" type="submit" name="insert">Upload</button>
            <br></br>
            <?php
                        if(isset($_SESSION['errorimage']))
                        {
                    ?>
                              <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION['errorimage'] ?>
                              </div>
                    <?php
                              unset($_SESSION['errorimage']);
                        }
                    ?>
          </div>
        </div>
      </div>
    </div>
  </form>


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