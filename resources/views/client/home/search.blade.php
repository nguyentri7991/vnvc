@extends('client.master_home')

@section('content')

<div class="site-blocks-cover" style="background-image: url({{asset('client/images/VNVC_BANNERWEBSITE_TIEMPHONGDAYDU_Desk_preview-FINAL.jpg')}}); height: 100px;" data-aos="fade" id="home-section">
     <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1></h1>
            <p class="mb-5"></p>

          </div>
        </div>
      </div>

    </div>
<br>
    <!-- Liên hệ-->

    <div class="container">
      <div>
        <h3 style="text-align: center; color: royalblue;">TRA CỨU THÔNG TIN TIÊM CHỦNG</h3>
      </div>
    </div>
    <form role="form" action="{{route('client.handleSearch')}}" method="POST" style="margin-left:40%">
    @csrf
        <input type="text" name="name_client" style="width:300px" placeholder="Họ Và Tên Khách Hàng"><br><br>
        <input type="text" name="vaccination_code" style="width:300px" placeholder="Mã Tiêm Chủng"><br><br>
        <input type="date" name="date_start" style="width:300px"><br><br>
        <input type="date" name="date_end" style="width:300px"><br><br>
        <input type="submit" value="Tìm Kiếm" style="align:center">
  </form>

@endsection
