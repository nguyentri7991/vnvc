@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH LỊCH ĐẶT</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Điện Thoại</th>
                    <th>#</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                  @foreach($client as $row)
                        <td>{{$index++}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->date_of_birth}}</td>
                        <td>{{$row->phone}}</td>
                        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{route('client.treatment',$row->id)}}">
                            <i class="fas fa-folder"></i>
                            Chi Tiêt</a>
                     </tr>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
@endsection
