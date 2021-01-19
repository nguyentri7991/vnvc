
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="dist/img/vnvc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">VNVC</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Họ tên userlogin vào</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!--Trung Tâm -->
        <li class="nav-item has-treeview">
            <a href="{{route('group.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>Trung Tâm</p>
            </a>
            </li>
        <!--Nhân Viên -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Quản Lý Nhân Viên
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <!--Danh Sách Nhân Viên -->
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Nhân Viên</p>
                </a>
              </li>
              <!--Lịch Trực -->
              <li class="nav-item">
                <a href="{{route('shift.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ca Trực</p>
                </a>
              </li>
              <!--Phòng Làm Việc -->
              <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phòng</p>
                </a>
              </li>
            </ul>
          </li>
        <!--Nhà Cung Câp -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-dolly-flatbed"></i>
              <p>
                Nhà Cung Cấp
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <!--Nhà Cung Câp -->
              <li class="nav-item">
                <a href="{{route('supplier.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhà Cung Cấp</p>
                </a>
              </li>
              <!--Phiếu Nhập -->
              <li class="nav-item">
                <a href="{{route('shift.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phiếu Nhập</p>
                </a>
              </li>
            </ul>
            </li>

        <!--Vaccine -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-syringe"></i>
              <p>
                Danh Mục Vaccine
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <!--Loại Vaccine -->
            <li class="nav-item">
                <a href="{{route('typevaccine.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loại Vaccine</p>
                </a>
                </li>
            <li class="nav-item">
                <a href="{{route('typepackage.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loại Gói</p>
                </a>
                </li>
            <li class="nav-item">
                <a href="{{route('vaccine.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vaccine</p>
                </a>
                </li>
            <li class="nav-item">
                <a href="{{route('package.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gói Vaccine</p>
                </a>
                </li>
            </ul>
          </li>
        <!--End -->

        <!--Khách Hàng -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Quản Lý Khách Hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <!--Loại Vaccine -->
            <li class="nav-item">
                <a href="{{route('client.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Khách Hàng</p>
                </a>
                </li>
            <li class="nav-item">
                <a href="{{route('registration.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đặt Lịch</p>
                </a>
                </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hóa Đơn</p>
                </a>
                </li>
            </ul>
          </li>
        <!--End -->
        </ul>
      </nav>
    </div>
  </aside>
