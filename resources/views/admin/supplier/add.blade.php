@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">THÊM NHÀ CUNG CẤP</h1>
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
  <form role="form" action="{{route('supplier.handleInsert')}}" method="POST">
    @csrf
    <div class="card-body">
        <div style="float:left;width:60%;">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Nhà Cung Cấp</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên Nhà Cung Cấp">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Viết Tắt</label>
                <input type="text" class="form-control" id="symbol" name="symbol" placeholder="Tên Viết Tắt">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Địa chỉ email">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
                </div>
            </div>
        </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </div>
  </form>
</div>
@endsection
