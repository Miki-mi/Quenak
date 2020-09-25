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
    <?php include 'controller/gettoken.php'?>
    

    <div class="site-section bg-light">
      <div class="container container-custom-width">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Login</h2>
                </div>
                <form action="controller/logincontroller.php" method="POST" style="margin-bottom: 4em;">
                    <?php
                        if(isset($_SESSION['error']))
                        {
                    ?>
                              <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION['error'] ?>
                              </div>
                    <?php
                              unset($_SESSION['error']);
                        }
                    ?>

                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']?>"> 
                        </div>
                    </div>   

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="loginemail">Email address</label>
                            <input type="email" id="loginemail" name="email" class="form-control form-control-lg"> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="loginpassword">Password</label>
                            <input type="password" id="loginpassword" name="password" class="form-control form-control-lg">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Login" class="btn btn-primary py-3 px-5"> 
                        </div>
                    </div>

                    
                </form>
                <div class="section-title mb-5">
                    <h2>Register</h2>
                </div>
                <form action="controller/registercontroller.php" method="POST">
                    <?php
                        if(isset($_SESSION['registererror']))
                        {
                    ?>
                              <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION['registererror'] ?>
                              </div>
                    <?php
                              unset($_SESSION['registererror']);
                        }
                        else if(isset($_SESSION['msg']))
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
                    <div class="col-md-12 form-group">
                            <label for="regname">Name</label>
                            <input type="text" id="regname" name="name" class="form-control form-control-lg">
    
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="regemail">Email address</label>
                            <input type="email" id="regemail" name="email" class="form-control form-control-lg">
    
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="regpassword">Password</label>
                            <input type="password" id="regpassword" name="password" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="regretypepassword">Re-Type Password</label>
                            <input type="password" id="regretypepassword" name="repassword" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
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