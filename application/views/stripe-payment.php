<?php header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<section class="food__contact__form bg--white section-padding--lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-3">
        <div class="contact__form__wrap">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">

                    <?php if($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                    <?php } ?>

                    <form role="form" action="<?=base_url()?>Order/stripe_payment" method="post" class="require-validation"
                       data-cc-on-file="false"
                       data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>"
                       id="payment-form">


            <div class="form-row row">
              
              <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">Name<span style="color: red;">*</span></label>
                <input name="name" type="text" value="<?php echo $this->session->userdata('username');?>" class="form-control" id="colFormLabelSm" placeholder="Enter your name here">
              
            </div>
            <div class="error"><?=form_error('name')?></div>


            <div class="form-row row">

              <label for="colFormLabel" class="col-sm-2 col-form-label">Email<span style="color: red;">*</span></label>
                <input name="email" type="email" value="<?php echo $this->session->userdata('email');?>" class="form-control" id="colFormLabel" placeholder="">
              </div>
            
            <div class="error"><?=form_error('email')?></div>

            <div class="form-row row">
              
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Address<span style="color: red;">*</span></label>
                <input name="address" type="text" class="form-control form-control-lg" placeholder="Enter your address here">
              </div>
            
            <div class="error"><?=form_error('address')?></div>


            <div class="form-row row">
              
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Mobile<span style="color: red;">*</span></label>
                <input name="mobile" type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Enter your Mobile Number">
              </div>
            

            <div class="error"><?=form_error('mobile')?></div>


                       <div class='form-row row'>
                        
                            <label class='col-sm-6 col-form-label col-form-label-lg'>Name on Card<span style="color: red;">*</span></label> 
                            <input class='form-control form-control-lg' size='4' type='text' name="name_on_card">
                        </div>
                

                    <div class='form-row row'>
                        
                            <label class='col-sm-6 col-form-label col-form-label-lg'>Card Number<span style="color: red;">*</span></label> 
                            <input
                            autocomplete='' class='form-control card-number' size='20'
                            type='text' name="card_number" >
                        </div>
                        <br>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC<span style="color: red;">*</span></label> <input autocomplete='off'
                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                            type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month<span style="color: red;">*</span></label> <input
                            class='form-control card-expiry-month' placeholder='MM' size='2'
                            type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year<span style="color: red;">*</span></label> <input
                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                            type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please provide correct data</div>
                        </div>
                    </div>

                    <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">

                    <div class="row">
                            <center><button style="background: red;border: red;" class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (<?php echo $total_price; ?> TK)</button></center>
                        </div>
                </form>
            </div>
        </div>        
    </div>
</div>

</div>
</div>     
</section>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        var $form         = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
            'input[type=text]', 'input[type=file]',
            'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });

            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
          }

      });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
