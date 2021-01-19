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
        <h3 style="text-align: center; color: royalblue;">ĐĂNG KÝ THÔNG TIN TIÊM CHỦNG</h3>
      </div>
      <div>
        <h5>THÔNG TIN KHÁCH HÀNG</h5> <hr></hr>
      </div>
    </div>
    <form role="form" action="{{route('client.registration')}}" method="POST">
    @csrf
      <table style="width: 90%; margin-left: 8%; height: 100%; " >
        <tr style="border-color: royalblue;">
          <td>
            <span>
              <input type="text" placeholder="Họ tên khách hàng tiêm" name="name" style="width: 500px;">
            </span>
          </td>
          <td></td>
          <td>
            <span>
              <select  name="gender" style="width: 15%;">
                <option value=”Nam″>Nam</option>
                <option value=”Nữ″>Nữ</option>
             </select>
            </span>
          </td>
        </tr>

        <tr>
          <td>
            <span>
              <input type="date" name="date_of_birth" style="width: 500px;">
            </span>
          </td>
          <td></td>
          <td>
            <span>
              <input type="text" name="vaccination_code" placeholder="Mã số tiêm chủng (nếu có)" style="width: 90%;">
            </span>
          </td>
        </tr>

        <tr>
          <td>
            <span>
              <input type="tel" name="phone" placeholder="SDT đăng ký với trung tâm" style="width: 500px">
            </span>
          </td>
          <td></td>
          <td>
            <span>
              <input type="email" name="email" placeholder="Email" style="width: 90%;">
            </span>
          </td>
        </tr>

        <tr>
          <td>
            <span>
              <input type="text" name="household_book" placeholder="Nhập địa chỉ hộ khẩu" style="width: 500px">
            </span>
          </td>
          <td></td>
          <td>
              <span>
                <div class="form-group" style="display:flex">
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
              </span>
          </td>
        </tr>

        <tr>
          <td>
            <span>
              <input name="name_guardian" placeholder="Người liên hệ" style="width: 500px;">
            </span>
          </td>
          <td></td>
          <td>
            <span>
              <input name="phone_guardian" placeholder="Điện thoại" style="width: 45%;">
            </span>
            <span>
              <select id="relationship" name="relationship">
                <option value="Cha">Cha</option>
                <option value="Mẹ">Mẹ</option>
                <option value="Vợ">Vợ</option>
                <option value="Chồng">Chồng</option>
                <option value="Con">Con</option>
                <option value="Anh">Anh</option>
                <option value="Chị">Chị</option>
                <option value="Em">Em </option>
              </select>
            </span>
          </td>
        </tr>

      </table>


    <br>
    <div>
      <h5 style="margin-left: 8%;">THÔNG TIN TIÊM CHỦNG</h5> <hr style="width: 85%;">
    </div>
    <table style="width: 90%; margin-left: 8%; height: 100%; ">

      <tr>
        <td>
          <h6 style="margin-left: 12%;"><b> Chọn mũi tiêm </b></h6>
        </td>
        <td>
          <h6 style="margin-left: 12%;"><b> Chọn lịch tiêm </b></h6>
        </td>
      </tr>
      <tr>
        <td>
          <input type="radio" id="tiemle" name="radio" onClick="filterData({{$vaccine}})" style="width: 20%;">
          <label for="tiemle">Tiêm lẻ</label><br>
          <input type="radio" id="tiemgoi" name="radio" onClick="filterData({{$package}})" style="width: 20%;">
          <label for="tiemgoi">Tiêm trọn gói</label><br>
        </td>
        <td>
          <span>
            <input type="date" name="registration_date"  style="width: 375px;">
          </span>
        </td>

      </tr>
      <tr>
        <td>
          <span>
            <select id="selectList" class="form-control" name="selectList" style="margin:15px;width:350px">
            </select>
          </span>
        </td>
        <td>
          <span>
            <select class="form-control" name="center" style="margin:15px;width:350px">
                @foreach($group as $item_group)
                <option value='{{$item_group ->id}}'>{{$item_group->name}} </option>
                @endforeach
            </select>
          </span>
        </td>
      </tr>
    </table>
    <div>
      <button type="submit" value="ĐĂNG KÝ" style="background-color: rgb(84, 64, 197); width: 10%; height: 50px
      ; text-align: center; color: ghostwhite; margin-left: 50%;"> ĐĂNG KÝ
    </div>
  </form>
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
<script type="text/javascript">
    function filterData(input) {
        $("#selectList").empty();
        for ($item of input) {
            console.log('item: ' + $item);
            $("#selectList").append('<option value="' + $item.id + '">' + $item.name + '</option>');
        }

    }
</script>

@endsection
