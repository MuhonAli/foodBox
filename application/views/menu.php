
<!-- Start Special Menu -->
<section class="fd__special__menu__area bg-image--3 section-pt--lg" style="padding-top: 30px;">
  <div class="container">
    <h2 class="text-center">Our Special Menu</h2>
  </div>
  <div class="special__food__menu mt--80">
    <div class="food__menu__prl bg-image--4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="food__nav nav nav-tabs" role="tablist"> 
              <a class="active" id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
              <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
              <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
              <a id="nav-drinks-tab" data-toggle="tab" href="#nav-drinks" role="tab">Drinks</a>
               <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
               <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
            </div>
            <div class="fd__tab__content tab-content" id="nav-tabContent">
       
              <!-- Start Single tab -->
              <div class="single__tab__panel tab-pane fade show active" id="nav-lunch" role="tabpanel">
                <div class="tab__content__wrap">
                  <!-- Start Single Tab Content -->
                  <div class="single__tab__content">
                    <!-- Start Single Food -->
                    <?php foreach ($lunchs as $item) { ?>
                    <div class="food__menu">
                      <div class="food__menu__thumb">
                        <a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>">
                          <img style="height: 110px" src="<?=base_url()?>asset/images/items/<?=$item['image']?>" alt="product images">
                        </a>
                      </div>
                      <div class="food__menu__details">
                        <div class="fd__menu__title__prize">
                          <h4><a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>"><?=$item['title']?> </a></h4>
                          <span class="menu__prize"><?=$item['price']?></span>
                        </div>
                        <div class="fd__menu__details">
                          <div class="delivery__time__rating">
                            <p>Delivery Time : 30 min, Delivery Cost : Free</p>
                            <ul class="fd__rating">
                                <?php $pr =$item['avg_rating']; 
                                      for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                              <li><i class="zmdi zmdi-star"></i></li>
                               <?php  }
                               else{ ?>
                              <li><i style="color: gray;" class="zmdi zmdi-star"></i></li>
                                    <?php  }
                                } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- End Single Food -->

                  </div>
                  <!-- End Single Tab Content -->
                </div>
              </div>
              <!-- End Single tab -->
              <!-- Start Single tab -->
              <div class="single__tab__panel tab-pane fade" id="nav-dinner" role="tabpanel">
                <div class="tab__content__wrap">
                  <!-- Start Single Tab Content -->
                  <div class="single__tab__content">
                    <?php foreach ($dinners as $item) { ?>
                    <div class="food__menu">
                      <div class="food__menu__thumb">
                        <a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>">
                          <img style="height: 110px" src="<?=base_url()?>asset/images/items/<?=$item['image']?>" alt="product images">
                        </a>
                      </div>
                      <div class="food__menu__details">
                        <div class="fd__menu__title__prize">
                          <h4><a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>"><?=$item['title']?> </a></h4>
                          <span class="menu__prize"><?=$item['price']?></span>
                        </div>
                        <div class="fd__menu__details">
                          <div class="delivery__time__rating">
                            <p>Delivery Time : 30 min, Delivery Cost : Free</p>
                            <ul class="fd__rating">
                                <?php $pr =$item['avg_rating']; 
                                      for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                              <li><i class="zmdi zmdi-star"></i></li>
                               <?php  }
                               else{ ?>
                              <li><i style="color: gray;" class="zmdi zmdi-star"></i></li>
                                    <?php  }
                                } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <!-- End Single tab -->
              <!-- Start Single tab -->
              <div class="single__tab__panel tab-pane fade" id="nav-coffee" role="tabpanel">
                <div class="tab__content__wrap">
                
                <div class="single__tab__content">
                    <!-- Start Single Food -->
                    <?php foreach ($coffees as $item) { ?>
                    <div class="food__menu">
                      <div class="food__menu__thumb">
                        <a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>">
                          <img style="height: 110px" src="<?=base_url()?>asset/images/items/<?=$item['image']?>" alt="product images">
                        </a>
                      </div>
                      <div class="food__menu__details">
                        <div class="fd__menu__title__prize">
                          <h4><a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>"><?=$item['title']?> </a></h4>
                          <span class="menu__prize"><?=$item['price']?></span>
                        </div>
                        <div class="fd__menu__details">
                          <div class="delivery__time__rating">
                            <p>Delivery Time : 30 min, Delivery Cost : Free</p>
                            <ul class="fd__rating">
                                <?php $pr =$item['avg_rating']; 
                                      for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                              <li><i class="zmdi zmdi-star"></i></li>
                               <?php  }
                               else{ ?>
                              <li><i style="color: gray;" class="zmdi zmdi-star"></i></li>
                                    <?php  }
                                } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- End Single Food -->
                  </div>
                </div>
              </div>
              <!-- End Single tab -->

              <!-- Start Single tab -->
              <div class="single__tab__panel tab-pane fade" id="nav-snacks" role="tabpanel">
                <div class="tab__content__wrap">
                
                <div class="single__tab__content">
                    <!-- Start Single Food -->
                    <?php foreach ($snacks as $item) { ?>
                    <div class="food__menu">
                      <div class="food__menu__thumb">
                        <a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>">
                          <img style="height: 110px" src="<?=base_url()?>asset/images/items/<?=$item['image']?>" alt="product images">
                        </a>
                      </div>
                      <div class="food__menu__details">
                        <div class="fd__menu__title__prize">
                          <h4><a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>"><?=$item['title']?> </a></h4>
                          <span class="menu__prize"><?=$item['price']?></span>
                        </div>
                        <div class="fd__menu__details">
                          <div class="delivery__time__rating">
                            <p>Delivery Time : 30 min, Delivery Cost : Free</p>
                            <ul class="fd__rating">
                                <?php $pr =$item['avg_rating']; 
                                      for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                              <li><i class="zmdi zmdi-star"></i></li>
                               <?php  }
                               else{ ?>
                              <li><i style="color: gray;" class="zmdi zmdi-star"></i></li>
                                    <?php  }
                                } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- End Single Food -->
                  </div>
                </div>
              </div>
              <!-- End Single tab -->

<!-- Start Single tab -->
              <div class="single__tab__panel tab-pane fade" id="nav-drinks" role="tabpanel">
                <div class="tab__content__wrap">
                    <div class="single__tab__content">
                    <!-- Start Single Food -->
                    <?php foreach ($drinks as $item) { ?>
                    <div class="food__menu">
                      <div class="food__menu__thumb">
                        <a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>">
                          <img style="height: 110px" src="<?=base_url()?>asset/images/items/<?=$item['image']?>" alt="product images">
                        </a>
                      </div>
                      <div class="food__menu__details">
                        <div class="fd__menu__title__prize">
                          <h4><a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>"><?=$item['title']?> </a></h4>
                          <span class="menu__prize"><?=$item['price']?></span>
                        </div>
                        <div class="fd__menu__details">
                          <div class="delivery__time__rating">
                            <p>Delivery Time : 30 min, Delivery Cost : Free</p>
                            <ul class="fd__rating">
                                <?php $pr =$item['avg_rating']; 
                                      for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                              <li><i class="zmdi zmdi-star"></i></li>
                               <?php  }
                               else{ ?>
                              <li><i style="color: gray;" class="zmdi zmdi-star"></i></li>
                                    <?php  }
                                } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- End Single Food -->
                  </div>
                </div>
              </div>
              <!-- End Single tab -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>      
<!-- End Special Menu -->
<br><br>