<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <a href="{{route('client.home_index')}}"><img src="{{asset('client/images/vnvc.png')}}" alt="" style="width:60px;height:60px" /></a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{route('client.home_index')}}"><i class="fa fa-home"></i> Trang Chủ</a></li>
				<li><a href="{{route('client.home')}}"><i class="fa fa-star"></i> Danh Mục Sản Phẩm</a></li>
				<li><a href="{{route('client.registration_injection')}}"><i class="fa fa-crosshairs"></i> Đăng Ký Tiêm</a></li>
                <li><a href="{{route('client.search')}}"><i class="fa fa-crosshairs"></i> Tra Cứu Thông Tin Tiêm</a></li>
                @if(session()->get('customer_id'))
                    <li><a href="{{route('client.logout_checkout')}}"><i class="fa fa-shopping-cart"></i>Đăng Xuất</a></li>
                @else
                    <li><a href="{{route('client.login_checkout')}}"><i class="fa fa-shopping-cart"></i>Đăng Nhập</a></li>
                @endif
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
