@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH NHÂN VIÊN TRONG PHÒNG</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
    <div class="table table-striped projects">
        <a class="btn btn-primary" href="{{route('room.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>Trở Lại</a>
    </div>
      <table class="table table-striped projects">
          <thead>
              <tr>
                <th>STT</th>
                <th style="width:45%">Nhân Viên</th>
                <th style="width:45%">Chức Vụ</th>
                <th style="width:20%;text-align:center">Thao Tác</th>
              </tr>
          </thead>
          <tbody>
          @php
            $index = 1;
          @endphp
            @foreach($detail_room as $row)
                <input type="hidden" id="id_detail" name="id_detail" value="{{$row->id_detail}}">
                <td>{{$index++}}</td>
                <td>{{$row->employee->name}}</td>
                <td>{{$row->employee->position->name}}</td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm"  href="{{URL::to('admin/room/edit',['id'=>$row->id])}}" >
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
