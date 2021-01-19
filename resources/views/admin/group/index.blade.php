@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH TRUNG TÂM VNVC</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table table-striped projects">
        <a class="btn btn-primary" href="{{route('group.add')}}">
            <i class="fas fa-plus-circle">
            </i>
            Thêm Mới
        </a>
        </div>
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>Trung Tâm</th>
                    <th>Địa Chỉ</th>
                    <th>Phường</th>
                    <th style="width: 15%;text-align:center">Thao Tác</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach($group as $row)
                        <td>{{$index++}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->street}}</td>
                        <td>{{$row->ward->name}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm"  href="{{URL::to('admin/group/edit',['id'=>$row->id])}}" >
                              <i class="fas fa-pencil-alt">
                              </i>
                              Cập Nhật
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{URL::to('admin/group/delete/'.$row->id)}}" >
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                      </td>
                    </tr>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
@endsection
