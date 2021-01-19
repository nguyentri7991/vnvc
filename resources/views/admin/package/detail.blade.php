@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">CHI TIẾT GÓI TIÊM</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>Phòng Bệnh</th>
                    <th>Tên Vaccine</th>
                    <th>Nước Sản Xuất</th>
                    <th>Số Lượng Liều</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                  @foreach($detail_package as $row)
                        <td>{{$index++}}</td>
                        <td>{{$row->prevention->name}}</td>
                        <td>{{$row->vaccine->name}}</td>
                        <td>{{$row->vaccine->source}}</td>
                        <td>{{$row->number_of_doses}}</td>
                    </tr>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
@endsection
