@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">CẬP NHẬT THỜI GIAN TRỰC</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
              <div class="card-header">
                <a class="btn btn-primary" href="{{route('shift.index')}}">
                    <i class="fas fa-arrow-circle-left">
                    </i>
                        Trở Lại
                    </a>
              </div>
              <form role="form" action="{{URL::to('/admin/shift/handleUpdate')}}" method="POST">
              @csrf
                <div class="card-body">
                <input type="hidden" class="form-control" id="id" name="id" value='{{$shift->id}}'>
                <div style="float:left;width:45%;">
                    <div class="row">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ca</label>
                            <input type="text" class="form-control" id="name" name="name"  disabled="" value='{{$shift->name}}'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thời Gian Bắt Đầu</label>
                            <input type="text" class="form-control" id="time_from" name="time_from" value='{{$shift->time_from}}'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thời Gian Kết Thúc</label>
                            <input type="text" class="form-control" id="time_to" name="time_to" value='{{$shift->time_to}}'>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cập Nhật Thông Tin</button>
                </div>
              </form>
            </div>
@endsection
