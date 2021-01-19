@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH CA</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ca</th>
                    <th>Thời Gian Bắt Đầu</th>
                    <th>Thời Gian Kết Thúc</th>
                    <th style="width: 15%;text-align:center">Thao Tác</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($shift as $row)
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->time_from}}</td>
                        <td>{{$row->time_to}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm"  href="{{URL::to('admin/shift/edit',['id'=>$row->id])}}" >
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                      </td>
                    </tr>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
@endsection
