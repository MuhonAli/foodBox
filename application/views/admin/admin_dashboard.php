   <div class="content-wrapper">

  <section class="content-header">
    <h1 class="text-center">Foodbox Dashboard</h1>
    <hr>
  </section>

  <!-- Main content -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-1 single-box" style=" background: #dc3545 !important;padding: 20px;border-radius: .15rem;">

        <p class="text-center" style="color: white;font-size: 24px;">Items</p> 
        <p  class="text-center" style="color: white;font-size: 20px;"><?=$total_items?></p> 

      </div>
      <div class="col-md-4 col-md-offset-1 single-box" style=" background: #dc3545 !important;padding: 20px;border-radius: .15rem;">

        <p class="text-center" style="color: white;font-size: 24px;">Cateogries</p> 
        <p  class="text-center" style="color: white;font-size: 20px;"><?=$total_categories?></p> 

      </div>
    </div>
  </div>

    <!-- Main content -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-1 single-box" style=" background: #dc3545 !important;padding: 20px;border-radius: .15rem;">
        
        <p class="text-center" style="color: white;font-size: 24px;">Orders</p> 
        <p  class="text-center" style="color: white;font-size: 20px;"><?=$total_orders?></p> 
        
      </div>
      <div class="col-md-4 col-md-offset-1 single-box" style=" background: #dc3545 !important;padding: 20px;border-radius: .15rem;">
        
        <p class="text-center" style="color: white;font-size: 24px;">Messages</p> 
        <p  class="text-center" style="color: white;font-size: 20px;"><?=$total_contact?></p> 
        
      </div>
    </div>
  </div>

    <!-- Main content -->
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-1 single-box" style=" background: #dc3545 !important;padding: 20px;border-radius: .15rem;">
        
        <p class="text-center" style="color: white;font-size: 24px;">Users</p> 
        <p  class="text-center" style="color: white;font-size: 20px;"><?=$total_users?></p> 
        
      </div>
      <div class="col-md-4 col-md-offset-1 single-box" style=" background: #dc3545 !important;padding: 20px;border-radius: .15rem;">
        
        <p class="text-center" style="color: white;font-size: 24px;">Pending Orders</p> 
        <p  class="text-center" style="color: white;font-size: 20px;"><?=$pending_orders?></p> 
        
      </div>
    </div>
  </div>
           </div>

      <style type="text/css">
  .container{
    margin-bottom: 30px;
  }
</style>