@extends('client.master_home')

@section('content')

<div class="site-blocks-cover" style="background-image: url({{asset('client/images/VNVC_BANNERWEBSITE_TIEMPHONGDAYDU_Desk_preview-FINAL.jpg')}}); height: 100px;" data-aos="fade" id="home-section">
     <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
        </div>
      </div>
    </div>
<br>
<div class="container">
  <div>
    <h3 style="text-align: center; color: royalblue;">KẾT QUẢ TRA CỨU THÔNG TIN TIÊM CHỦNG</h3>
  </div>
</div>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Trung Tâm</th>
        <th>Khách Hàng</th>
        <th>Bác Sĩ</th>
        <th>Phòng Tiêm</th>
        <th>Vắc Xin</th>
        <th>Ngày Tiêm</th>
        <th>Số Mũi Tiêm</th>
        <th>Ngày Tiêm Tiếp Theo</th>
      </tr>
  </thead>
  <tbody>
      @foreach($result_search as $result)
            <td>{{$result->name_center}}</td>
            <td>{{$result->name_client}}</td>
            <td>{{$result->name_employee}}</td>
            <td>{{$result->name_room}}</td>
            <td>{{$result->name_vaccine}}</td>
            <td>{{$result->date_of_injection}}</td>
            <td>{{$result->amount_of_injection}}</td>
            <td>{{$result->the_day_of_the_next_injection}}</td>
        </tr>
        </tr>
        @endforeach
  </tbody>
</table>
@endsection
