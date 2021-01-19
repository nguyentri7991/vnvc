<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | VNVC</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    @include('client.partial.header')
    @show

    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập tài khoản</h2>
                        <form action="{{route('client.login_account')}}" method="POST">
                        @csrf
                            <input type="email" name="email" placeholder="Tài Khoản email" />
                            <input type="password" name="password" placeholder="Mật khẩu" />
                            <span>
                                <input type="checkbox" class="checkbox">
                                Ghi nhớ lần đăng nhập
                            </span>
                            <button type="submit" class="btn btn-default">Đăng Nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">Hoặc</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng Ký</h2>
                        <form action="{{route('client.register_account')}}" method="POST">
                        @csrf
                            <input type="text" name="customer_name" placeholder="Họ Tên"/>
                            <input type="text" name="phone" placeholder="Số điện thoại"/>
                            <input type="email" name="email" placeholder="Email Address"/>
                            <input type="password" name="password" placeholder="Mật Khẩu"/>
                            <button type="submit" class="btn btn-default">Đăng Ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('client.partial.footer')
    @show

    <script src="{{asset('category/js/jquery.js')}}"></script>
	<script src="{{asset('category/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('category/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('category/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('category/js/main.js')}}"></script>
</body>
</html>
