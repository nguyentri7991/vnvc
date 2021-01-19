@extends ('client.layout')

@section("content")
	<div class="col-sm-9 padding-right">
		<div class="product-details">
            <div class="col-sm-5">
				<div class="view-product">
					<img src="{{URL::to($vaccine->image)}}" alt="" />
				</div>
			</div>
            <div class="product-information">
            <form action="{{route('client.save')}}" method="POST">
                @csrf
				<span>
					<span>{{$vaccine_id->name}}</span>
					<label>Quantity:</label>
                    <input type="text" value="1" name="quantity">
                    <input type="hidden" value="{{$vaccine_id->id}}" name="id_vaccine">
					<button type="submit" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Thêm Giỏ Hàng
					</button>
                </span>
            </form>
				<p><b>Giá:</b> {{$vaccine_id->price_out}}</p>
				<a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""></a>
			</div>
		</div>
    </div>
@endsection
