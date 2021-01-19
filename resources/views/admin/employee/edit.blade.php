@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">CẬP NHẬT NHÂN VIÊN</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
    <div class="card-header">
        <a href="{{route('employee.index')}}">
            <i class="fas fa-arrow-circle-left"></i>Trở Lại
        </a>
    </div>
<form role="form" action="{{route('employee.handleUpdate')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="card-body">
        <input type="hidden" class="form-control" id="id" name="id" value='{{$employee->id}}'>
            <div style="float:left;width:45%;">
                <div class="form-group">
                    <label for="exampleInputPassword1">Họ Tên</label>
                    <input type="text" class="form-control" id="name" name="name" value='{{$employee->name}}'>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày Sinh</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value='{{$employee->date_of_birth}}'>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">CMND</label>
                    <input type="text" class="form-control" id="cmnd" name="cmnd" value='{{$employee->cmnd}}'>
                </div>
                <div class="form-group">
                    <label for="formFileSm" class="form-label">Hình ảnh đại diện</label>
                    <input class="form-control-sm" id="image" name='image' type="file">
                    <image width='50px' height='50px' src="{{URL::to($employee->avatar)}}"></image>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" value='{{$employee->phone}}'>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value='{{$employee->email}}'>
                </div>
            </div>
            <div style="float:right;width:50%">
                <div class="row">
                    <div class="form-group" style="display:flex">
                        <select id="id_city" class="city form-control" name="city" style="margin:15px;width:150px">
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
                    <label for="exampleInputPassword1">Địa Chỉ</label>
                    <input type="text" class="form-control" id="street" name="street" value='{{$employee->street}}'>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Trình độ</label>
                    <select id="id_level" name="level" class="form-control">
                    @foreach($level as $level)
                        <option value='{{$level ->id}}'>{{$level->name}} </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới Tính</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value=”Nam″>Nam</option>
                        <option value=”Nu″>Nữ</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Chức Vụ</label>
                    <select id="id_position" name="position" class="form-control">
                    @foreach($position as $position)
                        <option value='{{$position ->id}}'>{{$position->name}} </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Trạng Thái</label>
                    <select id="status" name="status" class="form-control">
                        <option value=”HoatDong″>Hoạt Động</option>
                        <option value=”KhongHoatDong″>Không Hoạt Động</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Trung tâm VNVC</label>
                    <select id="id_center" name="center" class="form-control">
                    @foreach($group as $group)
                        <option value='{{$group ->id}}'>{{$group->name}} </option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Nhân Viên</button>
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
