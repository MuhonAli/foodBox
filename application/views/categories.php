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
          Categories
  
        </h2>
   </div>
 </div>

</div>
<!--end row -->
</section>
<div class="col-md-6 col-xs-6">
  <?php  $msg=$this->session->flashdata('message');
  if(!empty($msg)){
    echo  "<br>".$msg;  } ?> 
  </div>
  <!-- Main content -->
  <form method="get" enctype="multipart/form-data" action="<?=base_url()?>Categories" id="mainform">  
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
         <div class="">
   
               
        <!-- /.box-header -->
        <div class="settingstablebody box-body table-responsive">
          <table class="table table-hover">
            <tbody>
            <tr class="">
              <th>#</th>     
              <th>Name</th>     
              <th>Action</th>     
            </tr>

            <tr>
            

             <td>
             </td>

             <td>
               <div class="settingsinf">
                 <input type="text" placeholder="name" name="name" value="<?php if(!empty($name)){ echo  $name;  } ?>" >
               </div>
             </td>
             <td><button type="submit" id="" name="Search">Search</button></td>

   </tr> 
   <!--end tr -->
   </form>
   <?php
   $i=0;
    foreach($result as $row) { 
    $i++; ?>   
   <!-- start tr -->
   <td>
     <div class="settingsinf">
       <?=$i?>
     </div>
   </td>

   <td>
     <div class="settingsinf">
       <?=$row['name']?>

     </div>
   </td>

<td>
  <a href="<?=base_url()?>Categories/edit_categories/<?=$row['id']?>" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> 

  <a href="<?=base_url()?>Categories/delete/<?=$row['id']?>" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span></a> 
</td>
</tr> 
 <?php } ?>
</tbody>
</table>

</div><!-- box header -->



<!-- /.box-body -->
</div>
<!-- /.box --> 
</div>  


</div>
<!-- /.row -->
<!-- Main row -->


</section>
<!-- /.content -->
</div>
