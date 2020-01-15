
<section class="food__contact__form bg--white section-padding--lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="contact__form__wrap">
          <h2>CONFIRM YOUR ORDER</h2>

          <div class="contact__form__inner">
            <?php  $msg=$this->session->flashdata('message');
            if(!empty($msg)){ echo  "<br>".$msg;  } ?> 
            <form action="<?php echo base_url();?>Order" method="post">
              <div class="single-contact-form">
                <div class="contact-box name d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                  <input type="text" name="name" placeholder="Your Name" value="<?=set_value('name')?>" required>
                  <div class="error"><?=form_error('name')?></div>

                  <input type="email" name="email" <?=set_value('email')?>  placeholder="E-mail" required>
                  <div class="error"><?=form_error('email')?></div>

                  <input type="text" name="mobile" placeholder="Phone" <?=set_value('mobile')?> required>
                  <div class="error"><?=form_error('mobile')?></div>

                </div>
              </div>

              <div class="single-contact-form">
                <div class="address">
                  <textarea  name="address" placeholder="Enter your full address*" required=""><?=set_value('address')?></textarea>
                </div>
              </div>

              <div class="error"><?=form_error('address')?></div>

              <div class="contact-btn">
                <input type="submit" class="food__btn" value="Order Now"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  textarea{
    border: 1px solid #eeeeee;
    color: #959595;
    font-size: 14px;
    margin-top: 30px;
    min-height: 100px;
    padding-left: 16px;
    padding-top: 20px;
    width: 100%;
    resize: none;
  }
</style>