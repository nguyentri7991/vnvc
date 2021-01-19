@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">THÊM VACCINE</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('vaccine.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('vaccine.handleInsert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div style="float:left;width:45%;">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhà Cung Cấp</label>
                    <select id="id_supplier" class="form-control" name="supplier">
                            @foreach($supplier as $supplier)
                                <option value='{{$supplier ->id}}'>{{$supplier->symbol}} </option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loại Vaccine</label>
                    <select id="id_type" class="form-control" name="type">
                            @foreach($type as $type)
                                <option value='{{$type ->id}}'>{{$type->name}} </option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                    <label for="formFileSm" class="form-label">Hình ảnh Vaccine</label>
                    <input class="form-control-sm" id="image" name='image' type="file">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Vaccine</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên Vaccine">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nguồn Gốc</label>
                    <select id="source" name="source" class="form-control">
                        <option value="Pháp">Pháp</option>
                        <option value="Bỉ">Bỉ</option>
                        <option value="Mỹ">Mỹ</option>
                        <option value="Anh">Anh</option>
                        <option value="Việt Nam">Việt Nam</option>
                        <option value="Hàn Quốc">Hàn Quốc</option>
                        <option value="Cu Ba">Cu Ba</option>
                        <option value="Thái Lan">Thái Lan</option>
                        <option value="Ấn Độ">Ấn Độ</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá Nhập</label>
                    <input type="text" class="form-control" id="price_in" name="price_in" placeholder="Giá Nhập">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá Xuất</label>
                    <input type="text" class="form-control" id="price_out" name="price_out" placeholder="Giá Xuất">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Dạng Vaccine</label>
                    <select id="form" name="form" class="form-control">
                        <option value="Viên Uống">Viên Uống</option>
                        <option value="Ống Tiêm">Ống Tiêm</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Đơn Vị Tính</label>
                    <select id="unit" name="unit" class="form-control">
                        <option value="Vĩ">Vĩ</option>
                        <option value="Hộ">Hộp</option>
                        <option value="Viên">Viên</option>
                        </select>
                    </div>
            </div>
        <div style="float:right;width:50%;">
                <div class="form-group">
                    <label for="exampleInputEmail1">Công Dụng</label>
                    <input type="text" class="form-control" id="uses" name="uses" placeholder="Công Dụng">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chỉ Định</label>
                    <textarea class="form-control" rows="2"  id="amount" name="amount" placeholder="Chỉ Định"></textarea>
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Đường Dùng</label>
                    <select id="usings" name="usings" class="form-control">
                        <option value="Đường Tiêm">Đường Tiêm</option>
                        <option value="Đường Uống">Đường Uống</option>
                        <option value="Ngậm Dưới Lưỡi">Ngậm Dưới Lưỡi</option>
                        <option value="Nhỏ Mũi">Nhỏ Mũi</option>
                        <option value="Khí Dung">Khí Dung</option>
                        <option value="Thụt Đại Tràng">Thụt Đại Tràng</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Sản Xuất</label>
                    <input type="date" class="form-control" id="date_of_manufacture" name="date_of_manufacture">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Hạn Sử Dụng</label>
                    <input type="text" class="form-control" id="expiry_date" name="expiry_date" placeholder="Hạn Sử Dụng">
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cách Bảo Quản</label>
                    <textarea class="form-control" rows="2"  id="preservation" name="preservation"></textarea>
                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kiểu Đóng Gói</label>
                    <select id="packing_type" name="packing_type" class="form-control">
                        <option value="Đóng Chai Thủy Tinh">Đóng Chai Thủy Tinh</option>
                        <option value="Đóng Hộp">Đóng Hộp</option>
                        </select>
                    </div>
            </div>

    </div>
<div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </div>
  </form>
</div>

@endsection
