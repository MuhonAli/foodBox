<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>FoodBox || Food Delivery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?=base_url()?>asset/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?=base_url()?>asset/images/icon.png">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/css/plugins.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/style.css">

  <!-- Cusom css -->
  <link rel="stylesheet" href="<?=base_url()?>asset/css/custom.css">

  <!-- Modernizer js -->
  <script src="<?=base_url()?>asset/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>

  <!-- Add your site or application content here -->
  
  <!-- <div class="fakeloader"></div> -->

  <!-- Main wrapper -->
  <div class="wrapper" id="wrapper">
    <!-- Start Header Area -->
    <header class="htc__header bg--white">
      <!-- Start Mainmenu Area -->
      <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
              <div class="logo">
                <a href="<?=base_url()?>">
                  <img src="<?=base_url()?>asset/images/logo/foody.png" alt="logo images">
                </a>
              </div> 
            </div>
            <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
              <div class="main__menu__wrap">
                <nav class="main__menu__nav d-none d-lg-block">
                  <ul class="mainmenu">
                    <li class="drop"><a href="<?=base_url()?>">Home</a>
                      <li class="drop"><a href="<?=base_url()?>Welcome/menu">Menu</a>
                        <li><a href="<?=base_url()?>Welcome/items">Items</a></li> 
                        <li class="drop"><a href="<?=base_url()?>Welcome/contact">Contact Us</a>
                        <li class="drop" style="float: right;"><a href="<?=base_url()?>Order/my_account">Orders</a></li>
                  
                        </ul>
                      </nav>

                    </div>
                  </div>
                 
                   <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                    <div class="header__right d-flex justify-content-end">
                      <?php if (!empty($this->session->userdata('userid'))) { ?>


                      <div class="shopping__cart">
                        <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                        <div class="shop__qun w3view-cart">
                          <span class="cart_itemsss" id="cart_itemsss">
                            <?php if (!empty($total_cart_items)) { echo $total_cart_items; } ?>
                            </span>
                        </div>
                      </div>
                      <div class="log__in">
                        <a class="" href="<?=base_url()?>Logout"> <i class="zmdi zmdi-account-circle"> </i> Logout </a>
                      </div>
                        <?php } else{ ?>

                      <div class="shopping__cart">
                        <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                        <div class="shop__qun w3view-cart">
                          <span class="cart_itemsss" id="cart_itemsss">
                            <?php if (!empty($total_cart_items)) { echo $total_cart_items; } ?>
                            </span>
                        </div>
                      </div>

                    <div class="log__in">
                      <a class="accountbox-trigger" title="Register/Login" href="#"><i class="zmdi zmdi-account-o"></i></a>
                    </div>
                  <?php } ?>

                    </div>
                  </div>

            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none"></div>
            <!-- Mobile Menu -->
          </div>
        </div>
        <!-- End Mainmenu Area -->
      </header>
        <!-- End Header Area --> 
