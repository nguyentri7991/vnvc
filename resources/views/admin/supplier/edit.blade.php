@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">CẬP NHẬT NHÀ CUNG CẤP</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('supplier.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('supplier.handleUpdate')}}" method="POST">
    @csrf
    <div class="card-body">
    <div style="float:left;width:60%;">
    <input type="hidden" class="form-control" id="id" name="id" value="{{$supplier -> id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Nhà Cung Cấp</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$supplier -> name}}">
                </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Tên Viết Tắt</label>
                    <input type="text" class="form-control" id="symbol" name="symbol" value="{{$supplier -> symbol}}">
                    </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$supplier -> phone}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$supplier -> email}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$supplier -> address}}">
                </div>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </div>
  </form>
</div>
@endsection
