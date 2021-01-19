@extends('client.master_home')

@section('content')
<!-- Banner Quảng Cáo -->
    <div class="site-blocks-cover" style="background-image: url({{asset('client/images/Banner-web.jpg')}});" data-aos="fade" id="home-section">
     <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1></h1>
            <p class="mb-5"></p>
          </div>
        </div>
      </div>
      <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>
    <!-- End Banner Quảng Cáo -->

    <!-- Banner Giới Thiệu Trung Tâm -->
    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="owl-carousel slide-one-item-alt">
              <img src="{{asset('client/images/TTVNVC.jpg')}}" alt="Image" class="img-fluid" style="height: 800px;">
              <img src="{{asset('client/images/TTVNVC1.jpg')}}" alt="Image" class="img-fluid" style="height: 800px;">
              <img src="{{asset('client/images/TTVNVC2.jpg')}}" alt="Image" class="img-fluid" style="height: 800px;">
              <img src="{{asset('client/images/TTVNVC3.jpg')}}" alt="Image" class="img-fluid" style="height: 800px;">
              <img src="{{asset('client/images/TTVNVC4.jpg')}}" alt="Image" class="img-fluid" style="height: 800px;">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><</a><a href="#" class="custom-next">></a>
            </div>

          </div>

          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">GIỚI THIỆU TRUNG TÂM TIÊM CHỦNG VNVC</h2>
                <p>Trong bối cảnh dịch bệnh có nhiều biến đổi phức tạp,
                  vấn đề tiêm chủng vắc xin còn gặp nhiều khó khăn về điều kiện cơ sở vật chất,
                  với mong muốn ngày càng nhiều trẻ em và người lớn được tiêm vắc xin phòng bệnh,
                  giảm tối đa những tổn thất về con người, tiền bạc và sức khỏe, tháng 6/2017,
                  Công ty Cổ phần Vắc xin Việt Nam được thành lập, trở thành hệ thống trung tâm tiêm chủng cao cấp đầu tiên tại Việt Nam,
                  góp thêm sức mạnh cùng ngành y tế dự phòng trong việc cung cấp đầy đủ vắc xin phòng bệnh với chất lượng cao cấp và giá thành bình ổn.</p>

                <ul class="list-unstyled ul-check success">
                  <li>Cam kết bình ổn giá ngay cả thời điểm khan hiếm</li>
                  <li>Với hệ thống nhiều cơ sở trải dài từ Nam ra Bắc</li>
                  <li>Tự hào là đơn vị đầu tiên có các loại vắc xin thế hệ mới nhất từ các nhà sản xuất hàng đầu thế giới</li>
                  <li>Vắc xin được vận chuyển với xe lạnh và thiết bị vận chuyển chuyên dụng</li>
                  <li>Tất cả Khách hàng khi đến tiêm chủng đều được miễn phí dịch vụ khám sàng lọc trước tiêm</li>
                  <li>VNVC trang bị cơ sở vật chất khang trang, hiện đại, phòng tiêm với đầy đủ các trang thiết bị y tế đạt chuẩn cao cấp</li>
                  <li>Trong tương lai, hệ thống tiêm chủng VNVC dự kiến triển khai mở thêm nhiều trung tâm tiêm chủng cao cấp nữa tại Việt Nam, mang vắc xin và dịch vụ tiêm chủng đẳng cấp 5 sao, giá bình ổn, đến gần hơn với người dân ở mọi miền đất nước.</li>
                </ul>

          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Giới Thiệu Trung Tâm -->

    <!-- List Gói Vaccine -->
    <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7 text-left">
            <h10 class="section-title mb-3">DỊCH VỤ TIÊM CHỦNG <hr> </h10>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">
        @foreach($package as $item_package)
          <div class="property">
            <a href="#">
              <img style="height: 260px;" src="{{URL::to($item_package->image)}}" alt="Image" class="img-fluid"/>
              <span>{{$item_package->name}}</span>
            </a>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <!-- End List Gói Vaccine -->

    <!-- List Vaccine -->
    <section class="site-section" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h10 class="section-title mb-3">DANH MỤC VACXIN <hr> </h10>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">
            @foreach($vaccine as $item_vaccine)
            <div class="property">
                <a href="#">
                    <img style="height: 260px;" src="{{URL::to($item_vaccine->image)}}" alt="Image" class="img-fluid"/>
                    <span>{{$item_vaccine->name}}</span>
                </a>
            </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- End List Vaccine -->
@endsection
