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
                    <th>Trung Tâm</th>
                    <th>Ngày Đăng Ký</th>
                    <th>Khách Hàng</th>
                    <th>Người Giám Hộ</th>
                    <th>Liên Lạc</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                  @foreach($registration as $row)
                        <td>{{$index++}}</td>
                        <td>{{$row->center_name}}</td>
                        <td>{{$row->registration_date}}</td>
                        <td>{{$row->client_name}}</td>
                        <td>{{$row->guardian_name}}</td>
                        <td>{{$row->guardian_phone}}</td>
                     </tr>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
@endsection
