<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="contentheadflex content-header"  id="contentheid">
    <div class="row">
     <div class="col-sm-6">
       <div class="contenttitle memberperformencetitle">
         <h2>
          users 
        </h2>
      </div>
    </div>
  </div>
  <!--end row -->
</section>
<div class="col-md-6 col-xs-6">
  <?php  $msg=$this->session->flashdata('message');
  if(!empty($msg)){ echo  "<br>".$msg;  } ?> 
  </div>
  <!-- Main content -->
  <form method="get" enctype="multipart/form-data" action="<?=base_url()?>users/delete" id="mainform">  
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
         <div class="">
          <div class="box_header_custom box-header">

          </div>

          <div class="managecateshowing">
           <div class="singlemanacat">
             <div class="contenttitle">
               <p class="text-center"><strong> Total <?php echo $totalusers;   ?> users </strong></p>
             </div>
           </div>
         </div>

<div class="settingstablebody box-body table-responsive no-padding">
          <table class="tablenew table table-hover">
            <tbody>
              <tr class="catmanageheader">
                <th>User ID</th>        
                <th>email</th>     
                <th>Action</th>     
              </tr>
            </form>
            <?php foreach($result as $row) {  ?>   
            <!-- start tr -->
            <td>
             <div class="settingsinf">
               <?=$row['id']?>
             </div>
           </td>

           <td>
             <div class="settingsinf">
               <?=$row['email']?>
             </div>
           </td>

           <td>

            <a href="<?=base_url()?>users/delete/<?=$row['id']?>" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span></a> 
          </td>
        </tr> 
        <?php } ?>
      </tbody>
    </table>

  </div><!-- box header -->

</div>
<!-- /.box --> 
</div>  
</div>

</section>
<!-- /.content -->
</div>
