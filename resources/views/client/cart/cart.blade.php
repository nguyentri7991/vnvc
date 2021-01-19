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

	<section id="cart_items">
		<div class="container">
        <div class="table-responsive cart_info">
        <?php
            $content = Cart::content();
            // echo '<pre>';
            //     print_r($content);
            // echo'</pre>';

        ?>
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Hình Ảnh</td>
						<td class="description">Sản phẩm</td>
						<td class="price">Giá</td>
						<td class="quantity">Số Lượng</td>
						<td class="total">Tổng Tiền</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
                @foreach($content as $item)
					<tr>
						<td class="cart_product">
							<a href=""><img src="{{asset('category/images/cart/one.png')}}" alt="" style="width:50px;height:50px"></a>
						</td>
						<td class="cart_description">
							<h4><a href="">{{$item->name}}</a></h4>
						</td>
						<td class="cart_price">
							<p>{{number_format($item->price).' '.'VND'}}</p>
						</td>
						<td class="cart_quantity">
                            <form action="{{route('client.update_qty')}}" method="POST">
                                @csrf
                                <div class="cart_quantity_button" style="margin:15px">
                                    <input class="cart_quantity_input" type="text" name="quantity_cart" value="{{$item->qty}}" autocomplete="off" size="2">
                                    <input type="hidden" name="rowId_cart" value="{{$item->rowId}}" size="2">
                                    <input type="submit" name="update_qty" class="cart_quantity_update" value="Cập Nhật">
                                </div>
                            </form>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">
                                <?php
                                    $subtotal = $item->price * $item->qty;
                                    echo number_format($subtotal).' ' .'VND';
                                ?>
                            </p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="{{route('client.delete_cart',$item->rowId)}}"><i class="fa fa-times"></i></a>
						</td>
					</tr>
                @endforeach
				</tbody>
			</table>
		    </div>
		</div>
	</section>

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>Cart::total()</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
                            @if(session()->get('customer_id'))
                                <a class="btn btn-default check_out" href="{{route('client.checkout')}}">Thanh Toán</a>
                            @else
                                <a class="btn btn-default check_out" href="{{route('client.login_checkout')}}">Thanh Toán</a>
                            @endif

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
