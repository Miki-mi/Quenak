<!DOCTYPE html>
<html lang="en">

<?php include 'helper/head.php'; ?>
<?php include 'database/db.php'; ?>

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
    
      <div class="site-section mt-5">
        <div class="container">

          <div class="row mb-5">
            <div class="col-12 section-title text-center mb-5">
              <h2 class="d-block">Our Cookies</h2>
              <p>Manjakan dirimu dengan cookies terbaik kami!</p>
            </div>
          </div>
      
         
          
      <div class="row">
          
         
      <?php
      $id = 0;
      while($id < 6)
      {
          $id = $id + 1;
          $sql = "SELECT * FROM products where id=?";
          $select = $conn->prepare($sql);
          $select->bind_param('i', $id);
          $select->execute();
          $products = $select->get_result(); 

      ?>
          
          <?php foreach ($products as $p) { ?>
              <div class="col-lg-4 mb-5 col-md-6">
              <div class="wine_v_1 text-center pb-4">
                <a href="cookies-single.php?id=<?=$id?>" class="thumbnail d-block mb-4"><img src="<?=$p['productimages']?>" alt="Image" class="img-fluid"></a>
                <div>
                  <h3 class="heading mb-1"><a href="#"><?=$p['productname']?></a></h3>
  
                  <span class="price"><?=$p['productprice']?></span>
                </div>
                

                <div class="wine-actions">
                    
                  <h3 class="heading-2"><a href="cookies-single.php?id=<?=$id?>"><?=$p['productname']?></a></h3>
                  <span class="price d-block"><?=$p['productprice']?></span>
                  
                  <div class="rating">
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star-o"></span>
                  </div>
                  
                     <p><a href="./controller/addcartcontroller.php?id=<?=$id?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>
                </div>   
              </div>
            </div>
         <?php } ?>
<?php } ?>

                </div>
              </div>
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