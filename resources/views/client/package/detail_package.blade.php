@extends ('client.layout')

@section("content")
	<div class="col-sm-9 padding-right">
		<div class="product-details">
            <div class="col-sm-5">
				<div class="view-product">
					<img src="{{URL::to($package->image)}}" alt="" />
				</div>
			</div>
            <div class="product-information"><!--/product-information-->
            <form action="{{route('client.save')}}" method="POST">
                @csrf
				<span>
					<span>{{$package->name}}</span>
					<label>Quantity:</label>
                    <input type="text" value="1" name="quantity">
                    <input type="hidden" value="{{$package->id}}" name="id_package">
					<button type="submit" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Thêm Giỏ Hàng
					</button>
                </span>
            </form>
				<p><b>Giá:</b> {{$package->price}}</p>
				<a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""></a>
			</div>
		</div>
    </div>
@endsection
