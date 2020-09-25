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

    <div class="owl-carousel hero-slide owl-style">
      <div class="intro-section container" style="background-image: url('foto/welcome.png');">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <h1>WELCOME</h1>
            <span class="sub-title">-Quenak-</span>
          </div>
        </div>
      </div>

      <div class="intro-section container" style="background-image: url('images/infografisfix-01.jpg');">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Make It Sweet With Us</span>
            <h1>QUENAK</h1>
          </div>
        </div>
      </div>

    </div>
    
    <div class="site-section mt-5">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12 section-title text-center mb-5">
            <h2 class="d-block">Our New Cookie</h2>
            
          </div>
        </div>
        <div class="row">
          
          <div class="col-lg-4 mb-5 col-md-6">

            <div class="wine_v_1 text-center pb-4">
              <a href="cookies-single.php?id=1" class="thumbnail d-block mb-4"><img src="imagescookie/nastar.png" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Pineapple Cookie</a></h3>
                <span class="price">Rp90,000.00</span>
              </div>
          </div>
          </div>
          <div class="col-lg-4 mb-5 col-md-6">
            <div class="wine_v_1 text-center pb-4">
              <a href="cookies-single.php?id=2" class="thumbnail d-block mb-4"><img src="imagescookie/nastar_coklat.png" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Chocolate Pineapple Cookie</a></h3>
                <span class="price">Rp90,000.00</span>
              </div>
          </div>
          </div>

          
        </div>
      </div>
    </div>

    <div class="hero-2" style="background-image: url('images/banner-03.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <h2>Make It Sweet With Us</h2>
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