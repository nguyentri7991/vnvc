<header id="header"><!--header-->
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="{{route('client.home_index')}}"><img src="{{asset('client/images/vnvc.png')}}" alt="" style="width:60px;height:60px" /></a>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li><a href="{{route('client.home_index')}}"><i class="fa fa-home"></i> Trang Chủ</a></li>
							<li><a href="{{route('client.home')}}"><i class="fa fa-star"></i> Danh Mục Sản Phẩm</a></li>
							<li><a href="{{route('client.registration_injection')}}"><i class="fa fa-crosshairs"></i> Đăng Ký Tiêm</a></li>
                            <li><a href="{{route('client.search')}}"><i class="fa fa-crosshairs"></i> Tra Cứu Thông Tin Tiêm</a></li>
                            @if(session()->get('customer_id'))
                                <li><a href="{{route('client.cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
                                <li><a href="{{route('client.logout_checkout')}}"><i class="fa fa-shopping-cart"></i>Đăng Xuất</a></li>
                            @else
                                <li><a href="{{route('client.login_checkout')}}"><i class="fa fa-shopping-cart"></i>Đăng Nhập</a></li>
                            @endif

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
