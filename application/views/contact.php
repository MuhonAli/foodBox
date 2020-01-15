
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--24">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center brad__white">
                                <h2 class="bradcaump-title">contact us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <section class="food__contact__form bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__wrap">
                            <h2>Get In Touch With FoodBox</h2>
                            <div class="contact__form__inner">
                                <?php  $msg=$this->session->flashdata('message');
                                    if(!empty($msg)){ echo  "<br>".$msg;  } ?> 
                                <form action="<?php echo base_url();?>Contact" method="post">
                                    <div class="single-contact-form">
                                        <div class="contact-box name d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                            <input type="text" name="name" placeholder="Your Name" value="<?=set_value('name')?>" required>
                                            <div class="error"><?=form_error('name')?></div>

                                            <input type="email" name="email" <?=set_value('email')?>  placeholder="E-mail" required>
                                            <div class="error"><?=form_error('email')?></div>

                                            <input type="text" name="number" placeholder="Phone" <?=set_value('number')?> required>
                                            <div class="error"><?=form_error('number')?></div>
                                        </div>
                                    </div>

                                    <div class="single-contact-form">
                                        <div class="contact-box message">
                                            <textarea name="message"  placeholder="Message*" required=""><?=set_value('message')?></textarea>
                                        </div>
                                    </div>
                                    <div class="error"><?=form_error('message')?></div>

                                    <div class="contact-btn">
                                        <input type="submit" class="food__btn" value="Send message"></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>