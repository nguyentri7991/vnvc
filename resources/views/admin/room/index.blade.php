@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH PHÒNG</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
    <div class="table table-striped projects">
        <a class="btn btn-primary" href="{{route('room.add')}}">
            <i class="fas fa-plus-circle"></i>
            Thêm Mới
            </a>
    </div>
      <table class="table table-striped projects">
          <thead>
              <tr>
                <th style="width:5%">STT</th>
                <th style="width:35%">Trung Tâm</th>
                <th style="width:20%">Phòng</th>
                <th style="width:15%">Trưởng Phòng</th>
                <th style="width:20%;text-align:center">Thao Tác</th>
              </tr>
          </thead>
          <tbody>
          @php
            $index = 1;
          @endphp
            @foreach($detail as $row)
                <td>{{$index++}}</td>
                <td>{{$row->group->name}}</td>
                <td>{{$row->room->name}}</td>
                <td>{{$row->employee->name}}</td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="{{URL::to('admin/room/detail',['id'=>$row->id])}}">
                            <i class="fas fa-folder"></i>
                            Chi Tiêt</a>
                    <a class="btn btn-info btn-sm" href="{{URL::to('admin/room/edit',['id'=>$row->id])}}" >
                        <i class="fas fa-pencil-alt rd"></i>
                        Cập Nhật</a>
                </td>
                </tr>
                </tr>
            @endforeach
          </tbody>
      </table>
</div>
@endsection
