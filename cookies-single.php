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
    <?php include 'database/db.php'; 
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM products where id='$id'";
    $select = $conn->prepare($sql);
    $select->bind_param('i', $id);
    $select->execute();
    $products = $select->get_result(); 
    
    foreach ($products as $p) {
    ?>
          <div class="site-section mt-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="owl-carousel hero-slide owl-style">
                    <img src="<?=$p['productimages']?>" alt="Image" class="img-fluid">
                    <img src="<?=$p['productimages2']?>" alt="Image" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-5 ml-auto">
                  <h2 class="text-primary"><?=$p['productname']?></h2>
                  <h3><?=$p['productweight']?></h3>
                  <p><?=$p['productdescription']?></p>
                  <p class="price d-block"><?=$p['productprice']?></p>

            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 200px;">
                  <div class="input-group-prepend">
                      <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                    <input type="text" class="form-control text-center border mr-0" value="1" placeholder=""
                      aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
    
            </div>
                  <p><a href="./controller/addcartcontroller.php?id=<?=$id?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

                </div>
              </div>
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