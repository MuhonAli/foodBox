
        <!-- Start Slider Area -->
        <div class="slider__area slider--two">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--7 poss--relative">
                    <div class="container">
                        <div id="order_modal" class="modal fade" role="dialog">


<!-- start of order confirm modal -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4>Congratulations!</h4>
      </div>
      <div class="modal-body">
        <p> <?php  
          if($this->session->flashdata('order')){ echo $this->session->flashdata('order'); }
          ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of order confirm modal -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <div class="slider__text__img">
                                            <img class="layear-1" src="<?=base_url()?>asset/images/slider/text/2.png" alt="slider text image">
                                            <img class="layear-2" src="<?=base_url()?>asset/images/slider/text/1.png" alt="slider text image">
                                        </div>
                                        <div class="slider__input">
                                            <form action="<?=base_url()?>Welcome/items" method="get">
                                            <input style="width: 800px;" type="text" name="search" placeholder="Search for food..."><!-- 
                                            <input class="res__search" type="text" placeholder="Category"> -->
                                          
                                              <button class="search_button" type="submit">Search</button>
                                            
                                            
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide__pizza">
                        <img src="<?=base_url()?>asset/images/shape/slider-pizza.png" alt="pizza images">
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="service__wrapper bg--white">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our service</p>
                                <h2 class="title__line">How it work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                     
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="<?=base_url()?>asset/images/icon/color-icon/2.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Select, you love to eat</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Select your desire food that you love to have. We are all kind of foods</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="<?=base_url()?>asset/images/icon/color-icon/3.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Pickup or delivery</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>After selecting food place that for order. You can pick up your order from us either we will deliver it withing a short time.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->

   <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="<?=base_url()?>asset/images/icon/color-icon/1.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Pay on delivery</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Our Rider will call you after reaching your address. Pay only after you get the delivery.</p>
                                </div>
                            </div>
                        </div>
    <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Food Category -->
        <section class="food__category__area bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            
                            <h2 class="title__line">Food category</h2>
                        </div>
                    </div>
                </div>
               
                <div class="food__category__wrapper mt--40">
                    <div class="row">
                        <!-- Start Single Category -->
                        <?php foreach ($categories as $category) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                    <img src="<?=base_url()?>asset/images/category/<?=$category['category_image']?>" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="<?=base_url()?>Welcome/category/<?=$category['id']?>"><?=$category['name']?></a></h2>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        <!-- End Single Category -->
                     
                    </div>
                </div>
            </div>
        </section>
        <!-- End Food Category -->

        <!-- Start Our Pizza Area -->
        <section class="fd__pizza__area bg-image--25 section-padding--lg">
           
            <div class="order-now-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="fd__order__now text-center">
                                <div class="order__now__inner">
                                    <h6 style="color: #ae3535;">We Offer Free Delivery</h6>
                                    <h2 style="color: #ae3535;">Order Now: +123654789</h2>
                                    <p style="color: #ae3535;">Extremely thin ,juicy,cheeze,fluffy,crispy & light weight Pizza</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Pizza Area -->

        <!-- Start Counter Up Area -->
        <section class="fd__counterup__area funfact--2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="counter__up__inner d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between text-center">
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="<?=base_url()?>asset/images/icon/flat-icon/1.png" alt="flat icon">
                                        </div>
                                        <div class="fact__count ">
                                            <span class="count">245</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Food</h2>
                                    </div>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="<?=base_url()?>asset/images/icon/flat-icon/2.png" alt="flat icon">
                                        </div>
                                        <div class="fact__count">
                                            <span class="count">20</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Chef</h2>
                                    </div>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
                            <!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__details">
                                    <div class="funfact__count__inner">
                                        <div class="fact__icon">
                                            <img src="<?=base_url()?>asset/images/icon/flat-icon/3.png" alt="flat icon">
                                        </div>
                                        <div class="fact__count ">
                                            <span class="count">200</span>
                                        </div>
                                    </div>
                                    <div class="fact__title">
                                        <h2>Menu</h2>
                                    </div>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Up Area -->
<style>
    .search_button{
        background: #d50c0d;
    padding: 24px 29px;
    border-radius: 6px;
    border: none;
    color: white;
    font-weight: 700;
    }
</style>