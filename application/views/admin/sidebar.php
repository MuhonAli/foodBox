
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?=base_url()?>Admin_dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Items</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Manage_items"><i class="fa fa-caret-right"></i>Manage Items</a></li>
            <li><a href="<?=base_url()?>Manage_items/add_item"><i class="fa fa-caret-right"></i> Add New Items</a></li>
          </ul>
        </li>
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Categories"><i class="fa fa-caret-right"></i> Manage Categories</a></li>
            <li><a href="<?=base_url()?>Categories/add_categories"><i class="fa fa-caret-right"></i> Add Category</a></li>
          </ul>
        </li>
          
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Order/pending_orders"><i class="fa fa-caret-right"></i>Pending Orders</a></li>
            <li><a href="<?=base_url()?>Order/delivered_orders"><i class="fa fa-caret-right"></i> Deliver Orders</a></li>
            <li><a href="<?=base_url()?>Order/cancelled_orders"><i class="fa fa-caret-right"></i> Cancelled Orders</a></li>
          </ul>
        </li> 
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Users/index"><i class="fa fa-caret-right"></i> Manage Users</a></li>
          </ul>
        </li>    
          
         <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-arrow-circle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Users/messages"><i class="fa fa-caret-right"></i>User Messages</a></li>
          </ul>
        </li> 
          
     
    </section>
    <!-- /.sidebar -->
  </aside>
