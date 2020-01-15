<section class="food__contact__form bg--white section-padding--lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

    <?php  $msg=$this->session->flashdata('message');
    if(!empty($msg)){
      echo  "<br>".$msg;  } ?> 
      <?php if ($result) { ?>
      <center><h3 style="color:#d35c5c;">Your Orders</h3></center><br>
      <?php } ?>
      <table class="table col-md-10">
        <thead>
          <tr style="background: #d35c5c;font-weight: 700;">
            <th>Order Date</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
        </thead>

        <tbody>
          <?php foreach ($result as $row) { ?>
          <tr style="background: #f25564;">
            <td><?php 
            echo date("Y-m-d", strtotime($row['order_date'])); ?></td>
            <td><?php $cart = unserialize($row['cart']);
            $total =0;
            foreach ($cart as $cart2) {  

              $total +=$cart2['subtotal'];
            } 
            echo $total."Tk";
            ?> </td>

            <td><?php if($row['status']==0){
              echo 'Pending...';
            } else if($row['status']==1){
              echo 'Delivered';
            } else if($row['status']==2){
              echo 'Cancelled';
            } ?></td>
            <td><div class="btn-group"><a class="btn btn-success" href="<?=base_url()?>Order/order_details/<?=$row['id']?>">View Details</a></div></td>
           </tr>



           <?php } ?>
         </tbody>
       </table>
     </div>
   </div>
 </div>
</section>
<style>
  th, tr{
    color: white;
  }
</style>