@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">THÊM GÓI VACCINE</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('package.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('package.handleUpdate')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="card-body">
        <div style="float:left;width:30%;">
        <input type="hidden" class="form-control" id="id" name="id" value="{{$package->id}}">
        <div class="form-group">
                <label for="exampleInputEmail1">Loại Gói</label>
                <select class="form-control" id="id_type" name="type" >
                    @foreach($type as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <label for="formFileSm" class="form-label">Hình ảnh đại diện</label>
                <input class="form-control-sm" id="image" name='image' type="file">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Gói</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$package->name}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số Lượng Vaccine</label>
                <input type="text" class="form-control" id="quantity_vaccine" name="quantity_vaccine" value="{{$package->quantity_vaccine}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$package->price}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giảm Giá</label>
                <input type="text" class="form-control" id="saleOff" name="saleOff" value="{{$package->saleOff}}">
                </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ghi Chú</label>
                <input type="text" class="form-control" id="note" name="note" value="{{$package->note}}">
                </div>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </div>
  </form>
</div>

@endsection
