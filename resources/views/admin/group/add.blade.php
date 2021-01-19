@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">THÊM TRUNG TÂM</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('group.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('group.handleInsert')}}" method="POST">
    @csrf
    <div class="card-body">
    <div style="float:left;width:60%;">
        <div class="form-group">
            <label for="exampleInputEmail1">Trung Tâm</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Trung Tâm">
        </div>
        <label for="exampleInputPassword1">Địa Chỉ</label>
        <div class="row">
            <div class="row" style="display:flex">
                <select id="id_city" class="city form-control" name="city"style="margin:15px;width:150px">
                    <option value="0">Tỉnh/Thành</option>
                    @foreach($city as $city)
                        <option value='{{$city ->id}}'>{{$city->name}} </option>
                    @endforeach
                </select>
                <select id="id_district" name="district" class="district form-control "style="margin:15px;width:150px">
                    </select>
                <select id="id_ward" name="id_ward" class="ward form-control"style="margin:15px;width:150px">
                    </select>
            </div>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên Đường - Số Nhà</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Địa Chỉ">
            </div>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm Mới Trung Tâm</button>
    </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).on('change','.city',function(){
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
@endsection
