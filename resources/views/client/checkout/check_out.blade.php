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
			<div class="register-req">
				<p>Xin hãy đăng ký hoặc đăng nhập để thanh toán và xem lại lịch sử mua hàng</p>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Thông Tin Người Nhận</p>
                            <div class="form-two">
                                <form action="{{route('client.handlePayment')}}" method="POST">
                                @csrf
                                    <input type="text" name="name" placeholder="Họ và tên">
                                    <input type="date" name="date_of_birth" placeholder="Ngày sinh">
                                    <input type="text" name="vaccination_code" placeholder="Mã tiêm chủng (Nếu Có)">
                                    <input type="email" name="email" placeholder="Địa chỉ email">
                                    <input type="text" name="phone" placeholder="Số điện thoại">
                                    <input type="text" name="household_book" placeholder="Sổ hộ khẩu">
                                    <select name="gender">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    <div class="row" style="margin-left:-3px">
                                        <select class="city" name="city" style="margin:5px;width:150px;height:30px">
                                            <option value="0">Tỉnh/Thành</option>
                                            @foreach($city as $city)
                                            <option value='{{$city ->id}}'>{{$city->name}} </option>
                                            @endforeach
                                                </select>
                                        <select name="district" class="district"  style="margin:5px;width:150px;height:30px">
                                            </select>
                                        <select name="ward" class="ward"  style="margin:5px;width:150px;height:30px">
                                            </select>
                                    </div>
                                    <select name="center">
                                    @foreach($center as $i_center)
                                        <option value='{{$i_center ->id}}'>{{$i_center->name}} </option>
                                    @endforeach
                                        </select>
                                    <button type="submit" class="btn btn-primary btn">Thanh Toán</button>
                                </form>
                            </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="review-payment">
				<h2>Giỏ Hàng</h2>
			</div>
			<div class="table-responsive cart_info">
            <?php
                $content = Cart::content();
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
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).on('change','.city',function() {
            var cat_id = $(this).val();
            var div = $(this).parent();
            var option = " ";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findDistrict')!!}',
                data:{'id':cat_id},
                success:function(data){
                    option+= '<option value="0">Quận/Huyện</option>';
                    console.log(data.length);
                    for(var i =0;i<data.length;i++){
                        option +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    div.find('.district').html(" ");
                    div.find('.district').append(option);
                },
                error:function(){
                }
            });
        });
        $(document).on('change','.district',function () {
            var state_id = $(this).val();
            var div = $(this).parent();
            var opt ="";
            $.ajax({
                type: "get",
                url: '{!!URL::to('findWard')!!}',
                data: {'id':state_id},
                dataType: "json",
                success: function (dt) {
                    opt +='<option value="0">Phường/Xã</option>';
                    for(var i=0;i<dt.length;i++){
                        opt +='<option value="'+dt[i].id+'">'+dt[i].name+'</option>';
                    }
                    console.log(opt);
                    div.find('.ward').html(" ");
                    div.find('.ward').append(opt);
                },
                error:function(){
                }
            });
        });
    </script>
</body>
</html>
