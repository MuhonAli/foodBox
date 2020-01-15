<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="contentheadflex content-header"  id="contentheid">
          <div class="row">
             <div class="col-sm-12">
                 
                     <h3>
                        Manage Items
                      </h3>
              
             </div>
         </div>
         <!--end row -->
    </section>
    <?php echo $this->session->flashdata('message');  ?>

<form method="get" enctype="multipart/form-data" action="<?=base_url()?>Manage_items/index" id="mainform">   
        <div class="row">
        <div class="col-sm-12">
         <div class="">
                <div class="settingstablebody box-body table-responsive">
                  <table class="table table-hover">
                    <tbody>
                    
                    
                     <colgroup>
                          <col width="50">
                          <col width="250">
                          <col>
                      </colgroup>
                      
                      <tr class="catmanageheader">
                          <th>#</th>    
                          <th>Title</th>    
                          <th>Category</th>    
                          <th>Price</th>    
                          <th>Description</th>    
                          <th>Action</th>    
                      </tr>
            <tr>
            
              <td></td>
             <td>
               <div class="settingsinf">
                 <input type="text" placeholder="Item Name" name="title" value="<?php if(!empty($title)){ echo $title;
                 } ?>" >
               </div>
             </td>
             <td></td>
             <td>
               <div class="settingsinf">
                 <input type="text" placeholder="price" name="price" value="<?php if(!empty($price)){ echo  $price;  } ?>" >
               </div>
             </td>
             <td>
              <!--    <div class="settingsinf">
                 <input type="text" placeholder="description" name="description" value="<?php if(!empty($description)){ echo  $description;  } ?>" >
               </div> -->
             </td>
             <td><button type="submit" id="" name="Search">Search</button></td>

   </tr>
     </form>            
                         <!-- start tr -->
            <?php
            $i =0;
             foreach($result as $row) { 
              $i++; ?>
                        <tr>
                          <td><?=$i?></td>
                          <td>
                              <div class="settingsinf">
                                  <?=$row['title']?>
                              </div>
                          </td>

                          <td>
                              <div class="settingsinf">
                                  <?=$row['name']?>
                              </div>
                          </td>

                          <td>
                              <div class="settingsinf">
                                  <?=$row['price']?>Tk
                              </div>
                          </td>

                          <td>
                              <div class="settingsinf">
                                  <?=$row['description']?>
                              </div>
                          </td>

                          <td>
                              <div class="settinginfdetails">
                                  <p><a href="<?=base_url()?>Manage_items/edit_items/<?=$row['id']?>" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> &nbsp |  &nbsp

                                  <a href="<?=base_url()?>Manage_items/delete_items/<?=$row['id']?>" data-tooltip="tooltip"><span class="glyphicon glyphicon-trash"></span></a></p>
                              </div>
                          </td>
                        </tr> 
                        <!--end tr --> 
                        
                     <?php }?>

                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                
                    <!-- start pagination -->
                    <div class="paginationtables">
                        <ul style="list-style: none;">
                            <center><li><?php
                    
                     echo $this->pagination->create_links(); ?></li></center>
                           
                        </ul>
                    </div>
                    <!--end paginatioin -->
                    
                    
                    
                </div><!-- box header -->

            </form>
            
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