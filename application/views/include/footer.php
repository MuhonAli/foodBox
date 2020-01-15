
<!-- Start Footer Area -->
<footer class="footer__area footer--1">
    <div class="footer__wrapper bg__cat--1 section-padding--lg">
        <div class="container">
            <div class="row">
                <!-- Start Single Footer -->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="footer">
                        <h2 class="ftr__title">Address</h2>
                        <div class="footer__inner">
                            <div class="ftr__details">

                                <div class="ftr__address__inner">
                                    <div class="ftr__address">
                                        <div class="ftr__address__icon">
                                            <i class="zmdi zmdi-home"></i>
                                        </div>
                                        <div class="frt__address__details">
                                            <p>Abc Tower. 2nd Floor Zindabazar, Sylhet</p>
                                        </div>
                                    </div>
                                    <div class="ftr__address">
                                        <div class="ftr__address__icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <div class="frt__address__details">
                                            <p><a href="#">+088 01673-123456</a></p>
                                            <p><a href="#">+088 01773-654321</a></p>
                                        </div>
                                    </div>
                                    <div class="ftr__address">
                                        <div class="ftr__address__icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="frt__address__details">
                                            <p><a href="#">foodbox@email.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="social__icon">
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer -->

                <!-- Start Single Footer -->
                <div class="col-md-6 col-lg-4 col-sm-12 md--mt--40 sm--mt--40">
                    <div class="footer">
                        <h2 class="ftr__title">Opening Time</h2>
                        <div class="footer__inner">
                            <ul class="opening__time__list">
                                <li>Saturday<span>.......</span>9am to 11pm</li>
                                <li>Sunday<span>.......</span>9am to 11pm</li>
                                <li>Monday<span>.......</span>9am to 11pm</li>
                                <li>Tuesday<span>.......</span>9am to 11pm</li>
                                <li>Wednesday<span>.......</span>9am to 11pm</li>
                                <li>Thursday<span>.......</span>9am to 11pm</li>
                                <li>Friday<span>.......</span>9am to 11pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer -->
                <!-- Start Single Footer -->
                <div class="col-md-6 col-lg-4 col-sm-12 md--mt--40 sm--mt--40">
                    <div class="footer">
                        <h2 class="ftr__title">Quick Links</h2>
                        <div class="footer__inner">
                            <ul class="opening__time__list">
                                <li><a href="<?=base_url()?>" style="color: white;">Home</a></li>
                                <li><a href="<?=base_url()?>Welcome/menu" style="color: white;">Menu</a></li>
                                <li><a href="<?=base_url()?>Welcome/items" style="color: white;">Items</a></li>
                                <li><a href="<?=base_url()?>Welcome/contact" style="color: white;">Contact</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer -->
            </div>
        </div>
    </div>
    <div class="copyright bg--theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copyright__inner">
                        <div class="cpy__right--left">
                            <p>@All Right Reserved || <a href="#">Foodbox</a></p>
                        </div>
                        <div class="cpy__right--right">
                            <a href="#">
                                <!-- <img src="<?=base_url()?>asset/images/icon/shape/2.png" alt="payment images"> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Login Form -->

<div class="accountbox-wrapper <?php if($this->session->flashdata('visible')==1){echo 'is-visible';} ?>">
    <div class="accountbox text-left">
        <ul class="nav accountbox__filters" id="myTab" role="tablist">
            <li>
                <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
            </li>
            <li>
                <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
            </li>
        </ul>

        <div class="accountbox__inner tab-content" id="myTabContent">
            <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                <form method="post" action="<?=base_url()?>Login">

        <?php  if($this->session->flashdata('message')){ echo $this->session->flashdata('message');}?>

                    <div class="single-input">
                        <input class="cr-round--lg" type="email" placeholder="Email" name="email" required="">
                    </div>
                    <div class="error"><?=form_error('email')?></div>

                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Password" name="password" minlength="6" required>
                    </div>
                    <div class="error"><?=form_error('password')?></div>

                    <div class="single-input">
                        <center><button type="submit" class="food__btn btn-block"><span>Go</span></button></center>
                    </div>

                </form>
            </div>
            <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <form method="post" action="<?=base_url()?>Register">

        <div class="single-input">
                        <input class="cr-round--lg" type="email" placeholder="Email" name="email" required="">
                    </div>
                    <div class="error"><?=form_error('email')?></div>

                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Password" name="password" minlength="6" required>
                    </div>
                    <div class="error"><?=form_error('password')?></div>

                    <div class="single-input">
                        <center><button type="submit" class="food__btn btn-block"><span>Sign Up</span></button></center>
                    </div>

                </form>

            </div>

            <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
        </div>
    </div>
</div><!-- //Login Form -->



<div class="cartbox-wrap">
    <div class="cartbox text-right">
        <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
        <div class="cartbox__inner text-left" id="cart_details">
            
        </div>
    </div>
</div><!-- //Cartbox -->  
</div><!-- //Main wrapper -->

<!-- JS Files -->
<script src="<?=base_url()?>asset/js/vendor/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>asset/js/popper.min.js"></script>
<script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>asset/js/plugins.js"></script>
<script src="<?=base_url()?>asset/js/active.js"></script>

</body>
</html>
          <?php  
          
          
  if($this->session->flashdata('order')){  ?>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#order_modal').modal('show');
    });
</script>
<?php } ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->
<script>
$(document).ready(function(){
 
 
 $('.add_cart').click(function(){

  var product_id = $(this).data("productid");
  var product_name = $(this).data("productname");
  var product_price = $(this).data("price");
  var quantity = $('#' + product_id).val();


  if(quantity != '' && quantity > 0)
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Shopping_cart/add",

    type:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
    success:function(data)
    {
//     alert("Product Added into Cart");
     $('#cart_details').html(data);
     var cart_to_rows = $('#cart_to_rows').val();
      $('#cart_itemsss').text(cart_to_rows);
      $('.w3view-cart').css('padding','10px');

      setTimeout(
  function() 
  {
    $('.w3view-cart').css('padding','0px');
  }, 300);

      


    }
     });
  }
  else
  {
   alert("Please Enter quantity");
  }
 });

 $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     //alert("Product removed from Cart");
     $('#cart_details').html(data);
     var cart_to_rows = $('#cart_itemsss').text();
    var item_decrease = parseInt(cart_to_rows)-1;
    $('#cart_itemsss').text(item_decrease);

    }
   });

 });

 $(document).on('click', '#clear_cart', function(){
  if(confirm("Are you sure you want to clear cart?"))
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/clear",
    success:function(data)
    {
     //alert("Your cart has been clear...");
     $('#cart_details').html(data);
      $('#cart_itemsss').text('0');
    }
   });
  }
  else
  {
   return false;
  }
 });

});
</script>


<script>

 $(document).on('click', '.increase', function(){
  var row_id = $(this).attr("id");
  var qnty = $(this).find("span").text();
  //var qnty = $(this).closest('p').find('span').text();
    
   $.ajax({
    url:"<?php echo base_url(); ?>Shopping_cart/increase",
    method:"POST",
    data:{row_id:row_id,qnty:qnty},
    success:function(data)
    {
     $('#cart_details').html(data);
    }
     });
 });

 $(document).on('click', '.decrease', function(){
  var row_id = $(this).attr("id");
  var qnty = $(this).find("span").text();
 // var qnty = $(this).closest('p').find('span').text();
   $.ajax({
    url:"<?php echo base_url(); ?>Shopping_cart/decrease",
    method:"POST",
    data:{row_id:row_id,qnty:qnty},
    success:function(data)
    {
     $('#cart_details').html(data);
        var cart_to_rows = $('#cart_to_rows').val();
      $('#cart_itemsss').text(cart_to_rows);
    }
     });
 });


</script>