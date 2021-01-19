@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">Phòng</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('room.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>Trở Lại</a>
  </div>
  <form role="form" action="{{route('room.handleInsert')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
                <label for="exampleInputPassword1">Trung Tâm</label>
                <select id="id_center" name="center" class="form-control">
                @foreach($group as $group)
                    <option value='{{$group ->id}}'>{{$group->name}} </option>
                @endforeach
                </select>
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Phòng</label>
                <select id="id_room" name="room" class="form-control">
                @foreach($room as $room)
                    <option value='{{$room ->id}}'>{{$room->name}} </option>
                @endforeach
                </select>
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">Nhân Viên</label>
                <select id="id_employee" name="employee" class="form-control">
                @foreach($employee as $employee)
                    <option value='{{$employee ->id}}'>{{$employee->name}} </option>
                @endforeach
                </select>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </div>
  </form>
</div>
@endsection
