@extends ('client.layout')

@section("content")
<div class="col-sm-9 padding-right">
		<div class="features_items">
			<h2 class="title text-center">DANH MỤC GÓI TIÊM</h2>
            @foreach($package as $item_package)
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{URL::to($item_package->image)}}" alt="" />
							<h2>{{number_format($item_package->package_price),'VND'}}</h2>
							<p>{{$item_package->package_name}}</p>
						</div>
						<div class="product-overlay">
							<div class="overlay-content">
								<h2>{{number_format($item_package->package_price),'VND'}}</h2>
							    <p>{{$item_package->package_name}}</p>
								<a href="{{route('client.package_detail',$item_package)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach
		</div>
@endsection
