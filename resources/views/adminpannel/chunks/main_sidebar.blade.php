<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset('adminfiles/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p> {{Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>  {{Auth::user()->type}}</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="/blogadminarea">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

      </li>
  
 <!--  <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <span>Pages Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/pages"><i class="fa fa-circle-o"></i>Add/Update/Pages</a></li>

        </ul>
      </li> -->

    
      @if (!Auth::guest() && Auth::user()->type=='admin') 
      
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <span>Slider</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/AddSliderImage"><i class="fa fa-circle-o"></i>Add Silder Image</a></li>

        </ul>
      </li> -->

         <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL('addcat') }}"><i class="fa fa-circle-o"></i>Add Catagory</a></li>
            <li><a href="{{ URL('view-all-catagories') }}"><i class="fa fa-circle-o"></i>View All Catagory</a></li>
             <li><a href="{{ URL('searchpost') }}"><i class="fa fa-circle-o"></i>Search Posts</a></li>
             <li><a href="{{ URL('addpost') }}"><i class="fa fa-circle-o"></i>Add Post</a></li>

          </ul>
        </li>
      <!--   <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Accessories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL('admin/accessories') }}"><i class="fa fa-circle-o"></i>Accessories</a></li>
            <li><a href="{{ URL('admin/sub_accessories') }}"><i class="fa fa-circle-o"></i>Accessories Sub Types</a></li>
       

          </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Accessories Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL('admin/accessories_item') }}"><i class="fa fa-circle-o"></i>Accessories Item</a></li>
             <li><a href="{{ URL('admin/accessories_item_list') }}"><i class="fa fa-circle-o"></i> Item List</a></li>
           
       

          </ul>
        </li> -->
        @endif
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>