<section class="food__contact__form bg--white section-padding--lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

                <table class="table table-bordered">
                  <tr>
                   <th width="40%">Item</th>
                   <th width="20%">Quantity</th>
                   <th width="20%">Price</th>
                   <th width="20%">Total</th>
                 </tr>

                 <?php 
                 $total =0;
                  foreach($cart as $cart){
                  $total +=$cart['subtotal']; ?>

                 <tr> 
                  <td class="pname" ><?php echo $cart['name'] ?></td>
                  <td class="pname" ><?php echo $cart['qty'] ?></td>
                  <td class="pname" ><?php echo $cart['price'] ?>Tk</td>
                  <td class="pname" ><?php echo $cart['subtotal'] ?>Tk</td>
                  
                </tr>
                <?php } ?>
                <tr>
                  <th></th><th></th><th>Grand Total</th>
                  <th><p><?php echo $total." Tk"; ?></p></th>
                </tr>
              </table>

            </div>
          </div>
        </div>
      </section>