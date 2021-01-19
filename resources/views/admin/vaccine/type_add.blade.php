@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">THÊM LOẠI VACCINE</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('typevaccine.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('typevaccine.handleInsert')}}" method="POST">
    @csrf
    <div class="card-body">
        <div style="float:left;width:30%;">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Loại</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên Loại Vaccine">
            </div>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </div>
  </form>
</div>

@endsection
