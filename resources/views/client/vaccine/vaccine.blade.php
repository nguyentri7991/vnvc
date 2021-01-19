@extends ('client.layout')

@section("content")
<div class="col-sm-9 padding-right">
		<div class="features_items">
			<h2 class="title text-center">DANH MỤC VACCINE</h2>
            @foreach($vaccine as $item_vacine)
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<image src="{{URL::to($item_vacine->image)}}"/>
							<h2>{{number_format($item_vacine->price_out),'VND'}}</h2>
							<p>{{$item_vacine->name}}</p>
						</div>
						<div class="product-overlay">
							<div class="overlay-content">
								<h2>{{number_format($item_vacine->price_out),'VND'}}</h2>
							    <p>{{$item_vacine->name}}</p>
								<a href="{{route('client.vaccine_detail',$item_vacine)}}" class="btn btn-default add-to-cart">
                                    <i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
            @endforeach
		</div>
@endsection
