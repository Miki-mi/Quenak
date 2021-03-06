
<?php session_start(); ?>
<?php $id = isset($_GET['id']) ? $_GET['id'] : ""; ?>

<div class="header-top">
<div class="container">
  <div class="row align-items-center">
    <div class="col-12 text-center">
      <a href="index.php" class="site-logo">
        <img src="images/logofix.png" alt="Image" class="img-fluid" height="200" width="200">
      </a>
    </div>
    <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
          class="icon-menu h3"></span></a>
  </div>
</div>

<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

<div class="container">
  <div class="d-flex align-items-center">
    
    <div class="mx-auto">
      <nav class="site-navigation position-relative text-left" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
          <?php if(isset($_SESSION['email']) && $_SESSION != null) { ?>
                <li><a href="index.php" class="nav-link text-left">Home</a></li>
                <li><a href="cookies.php" class="nav-link text-left">Cookies</a></li>
                <li><a href="recipes.php" class="nav-link text-left">Recipes & Videos</a></li>
                <li><a href="cart.php?id=<?=$id?>" class="nav-link text-left">Cart</a> </li>
                <li><a href="cookies.php" class="nav-link text-left">Purchase History</a></li>
                <li><a href="contact.php" class="nav-link text-left">Contact</a></li>
                <li><a href="controller/logoutcontroller.php" class="nav-link text-left">Logout</a></li>
          <?php } else {  ?>
                <li><a href="index.php" class="nav-link text-left">Home</a></li>
                <li><a href="cookies.php" class="nav-link text-left">Cookies</a></li>
                <li><a href="contact.php" class="nav-link text-left">Contact</a></li>
                <li><a href="account.php" class="nav-link text-left">Account</a></li>
          <?php } ?>

        </ul>                                                                                                                                                                                                                                                                                         
      </nav>

    </div>
   
  </div>
</div>

</div>

</div>