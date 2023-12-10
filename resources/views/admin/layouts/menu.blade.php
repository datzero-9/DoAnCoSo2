
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light">{{Auth::User()->name}}</span>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('logoutAcc')}}">Đăng xuất</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <form action="">
 
          <div class="input-group">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" name="key">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>

      </form>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          
         
          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Quản lý danh mục
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Thống kê
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý sản phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Danh sách cụ thể
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.laptop')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laptop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.manhinh')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Màn hình</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.chuot')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chuột</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.tainghe')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tai nghe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.banphim')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bàn phím</p>
                </a>
              </li>
             
            </ul>
          </li> --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Quản lý tài khoản 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('accountuser.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tài khoản người dùng</p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
