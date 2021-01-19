<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | VNVC</title>
    <link href="{{asset('category/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('category/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('category/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('category/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('category/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('category/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('category/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('category/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('category/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('category/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('category/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <?php
        Session::get('customer_id');
    ?>
    @include('client.partial.header')
    @show
    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>GÓI TIÊM</h2>
						<div class="panel-group category-products" id="accordian">
                            @foreach($type_package as $item_type)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{route('client.package',$item_type)}}">{{$item_type->name}}</a></h4>
								</div>
							</div>
                            @endforeach
						</div>
						<div class="brands_products">
							<h2>VACCINE</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{route('client.vaccine')}}">Mua Lẻ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
                @yield('content')
				</div>
			</div>
		</div>
	</section>

    @include('client.partial.footer')
    @show

    <script src="{{asset('category/js/jquery.js')}}"></script>
	<script src="{{asset('category/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('category/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('category/js/price-range.js')}}"></script>
    <script src="{{asset('category/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('category/js/main.js')}}"></script>
</body>
</html>
