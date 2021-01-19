@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">CẬP NHẬT LOẠI GÓI VACCINE</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('typepackage.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('typepackage.handleUpdate')}}" method="POST">
    @csrf
    <div class="card-body">
        <div style="float:left;width:30%;">
        <input type="hidden" class="form-control" id="id" name="id" value="{{$type->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Loại</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$type->name}}">
            </div>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </div>
  </form>
</div>

@endsection
