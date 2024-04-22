<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <img src="/asset/IMG/logoadmin.png">
      </div>
      <div class="sidebar-brand-text mx-3">Điện Máy Xanh</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Giao diện người dùng</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    <li class="nav-item">
      <a class="nav-link" href="/TQ">
      <i class="fas fa-globe"></i>
        <span>Tổng Quát</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Quản Lý Sản Phẩm</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('admin.loaisanpham.index')}}">Quản lý loại sản phẩm</a>
          <a class="collapse-item" href="{{route('admin.sanpham.index')}}">Quản lý sản phẩm</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.hoadonban.index')}}">
      <i class="fas fa-file-invoice-dollar"></i>
        <span>Quản lí hóa đơn bán</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.khachhang.index')}}">
        <i class="fas fa-fw fa-user"></i>
        <span>Quản lí khách hàng</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.donhang.index')}}">
      <i class="fas fa-shopping-basket"></i>
        <span>Quản lí đơn hàng</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.kho.index')}}">
      <i class="fas fa-warehouse"></i>
        <span>Quản lí kho</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Báo Cáo Thống Kê</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          {{-- <h6 class="collapse-header">Tables</h6> --}}
          <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
          <a class="collapse-item" href="datatables.html">DataTables</a>
        </div>
      </div>
    </li>
    {{-- <hr class="sidebar-divider"> --}}
    {{-- <div class="sidebar-heading">
      Examples
    </div> --}}
    {{-- <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fas fa-fw fa-columns"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePage" class="collapse show" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Example Pages</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item active" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span>
      </a>
    </li> --}}
    {{-- <hr class="sidebar-divider"> --}}
    {{-- <div class="version" id="version-ruangadmin"></div> --}}
  </ul>