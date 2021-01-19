@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH GÓI TIÊM</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
            <div class="table table-striped projects">
        <a class="btn btn-primary" href="{{route('package.add')}}">
            <i class="fas fa-plus-circle">
            </i>
            Thêm Mới
        </a>
        </div>
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>Hình Ảnh</th>
                    <th>Tên Loại</th>
                    <th>Tên Gói</th>
                    <th>Số Lượng Vaccine</th>
                    <th>Giá</th>
                    <th>Giảm Giá</th>
                    <th style="width: 25%;text-align:center">Thao Tác</th>
                  </tr>
              </thead>
              <tbody>
               @php
                $index = 1;
              @endphp
                  @foreach($package as $row)
                        <td>{{$index++}}</td>
                        <td><image width='50px' height='50px' src="{{URL::to($row->image)}}"/></td>
                        <td>{{$row->type->name}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->quantity_vaccine}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->saleOff}}</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('package.detail',['id'=>$row->id])}}">
                            <i class="fas fa-folder"></i>
                            Chi Tiêt</a>
                        <a class="btn btn-info btn-sm"  href="{{route('package.edit',['id'=>$row->id])}}" >
                              <i class="fas fa-pencil-alt"></i>
                              Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa ?')" href="{{URL::to('admin/package/delete/'.$row->id)}}" >
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
