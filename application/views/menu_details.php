
<!-- Start Blog List View Area -->
<section class="blog__list__view section-padding--lg menudetails-right-sidebar bg--white">

  <div class="container">
    <div class="row">

      <div class="col-lg-10 offset-1 col-md-12 col-sm-12">
<?php  $msg=$this->session->flashdata('message');
  if(!empty($msg)){ echo  "<br>".$msg;  } ?> 
        <div class="food__menu__container">
          <div class="food__menu__inner d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
            <div class="food__menu__thumb">
              <img src="<?=base_url()?>asset/images/items/<?=$item[0]['image']?>" alt="images">
            </div>
            <div class="food__menu__details">
              <div class="food__menu__content">
                <h2><?=$item[0]['title']?></h2>
                <ul class="food__dtl__prize d-flex">
                  <li><?=$item[0]['price']?>Tk</li>
                </ul>
                <ul class="rating">
                  <?php $pr =$item[0]['avg_rating']; 
                                for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                                  <i class="fa fa-star" style="color: orange;"></i>
                                  <?php  }
                                  else{ ?>
                                  <i class="fa fa-star-o" style="color: gray;"></i>
                                  <?php  }
                                } ?>
                </ul>
                <p><?=$item[0]['description']?></p>
                <div class="product-action-wrap">
                  <!-- <div class="prodict-statas"><span>Food Type : Taco</span></div> -->
                  <div class="product-quantity">
                    <form id='myform' method='POST' action='#'>
                      <div class="product-quantity"><br>
                        <input type="hidden" name="quantity" value="1" class="form-control quantity" id="<?php echo $item[0]['id']; ?>" />
                        <div class="add__to__cart__btn">
                            <input type="button" class="food__btn add_cart" data-productname="<?php echo $item[0]['title']; ?>" data-price="<?php echo $item[0]['price']; ?>" data-productid="<?php echo $item[0]['id']; ?>" value="Add to cart" ></input>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Product Descrive Area -->



          <div class="menu__descrive__area">
            <div class="menu__nav nav nav-tabs" role="tablist">
              <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">Reviews</a>
            </div>
      <div class="container">
        <div class="row" style="margin-top:40px;">
          <div class="col-md-12 ">
            <div class="well well-sm">

              <div class="row" id="post-review-box">
                <div class="col-md-12">
                  <form accept-charset="UTF-8" action="<?=base_url()?>Review/add_reviews/<?php echo $item[0]['id']; ?>" method="post">

                      <div class="col-md-7 rate">
                      <input style="display: none;" type="radio" id="star1" name="rate" value="5" />
                      <label for="star1" title="1 star">1 star</label>
                      <input style="display: none;" type="radio" id="star2" name="rate" value="4" />
                      <label for="star2" title="2 stars">2 stars</label>
                      <input style="display: none;" type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" title="3 star3">3 stars</label>
                      <input style="display: none;" type="radio" id="star4" name="rate" value="2" />
                      <label for="star4" title="4 stars">4 stars</label>
                      <input style="display: none;" type="radio" id="star5" name="rate" value="1" />
                      <label for="star5" title="5 stars">5 stars</label>

                    </div>
                    <input id="ratings-hidden" name="rating" type="hidden"> 
                    <textarea class="form-control animated" cols="50" id="new-review" name="review" placeholder="Enter your review here..." rows="5"></textarea>

                    <div class="text-right">
                      <div class="stars starrr" data-rating="0"></div><br>
                      <button class="btn btn-success btn-lg food__btn" type="submit">Save</button>
                    </div>
                    <br>
                  </form>
                </div>
              </div>
            </div> 

          </div>
        </div>
      </div>
            <!-- Start Tab Content -->
            <div class="menu__tab__content tab-content" id="nav-tabContent">
              <!-- Start Single Content -->
                              <div class="review__wrapper">
                  <!-- Start Single Review -->
                   <?php foreach ($reviews as $review) { ?>
                  <div class="single__review d-flex">
           
                    <div class="review__details">
                      <h3><?=$review['email']?></h3>
                      <div class="rev__meta d-flex justify-content-between">
                        <ul class="rating">
                          <?php $pr =$item[0]['avg_rating']; 
                                for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) { ?> 
                                  <i class="fa fa-star" style="color: orange;"></i>
                                  <?php  }
                                  else{ ?>
                                  <i class="fa fa-star-o" style="color: gray;"></i>
                                  <?php  }
                                } ?>
                        </ul>
                      </div>
                      <p><?=$review['review']?></p>
                    </div>
                  </div>
                  <!-- End Single Review -->
                <?php } ?>
                </div>
              <!-- End Single Content -->
            </div>
            <!-- End Tab Content -->
          </div>
          <!-- End Product Descrive Area -->
        </div>

      </div>

    </div>
  </div>
</section>
        <!-- End Blog List View Area -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>


.rate {
  float: left;
  height: 46px;
  padding: 0 10px;
}

.rate:not(:checked) > input {
  //position: absolute;
  top: -9999px;
}

.rate:not(:checked) > label {
  float: right;
  width: 1em;
  overflow: hidden;
  white-space: nowrap;
  cursor: pointer;
  font-size: 30px;
  color: #ccc;
}

.rate:not(:checked) > label:before { content: '★ '; }

.rate > input:checked ~ label { color: #ffc700; }

.rate:not(:checked) > label:hover, .rate:not(:checked) > label:hover ~ label { color: #deb217; }

.rate > input:checked + label:hover, .rate > input:checked + label:hover ~ label, .rate > input:checked ~ label:hover, .rate > input:checked ~ label:hover ~ label, .rate > label:hover ~ input:checked ~ label { color: #c59b08; }
</style>
