@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH NHÂN VIÊN</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table table-striped projects">
            <a class="btn btn-primary" href="{{route('employee.add')}}">
                <i class="fas fa-plus-circle"></i>
                Thêm Mới</a>
        </div>
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th scope='col'>STT</th>
                    <th scope='col'>Avatar</th>
                    <th scope='col'>Họ Tên</th>
                    <th scope='col'>Tài Khoản</th>
                    <th scope='col'>Trung Tâm</th>
                    <th scope='col'>Chức Vụ</th>
                    <th style="width: 30%;text-align:center">Thao Tác</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                  @foreach($employee as $row)
                        <td>{{$index++}}</td>
                        <td><image width='50px' height='50px' src="{{URL::to($row->avatar)}}"/></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->group->name}}</td>
                        <td>{{$row->position->name}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{URL::to('admin/employee/profile',['id'=>$row->id])}}">
                            <i class="fas fa-folder"></i>
                            Chi Tiêt</a>
                          <a class="btn btn-info btn-sm"  href="{{URL::to('admin/employee/edit',['id'=>$row->id])}}" >
                            <i class="fas fa-pencil-alt"></i>
                            Cập Nhật</a>
                          <a class="btn btn-danger btn-sm" href="{{URL::to('admin/employee/delete/'.$row->id)}}" >
                            <i class="fas fa-trash"></i>
                            Xóa</a>
                      </td>
                     </tr>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
@endsection
