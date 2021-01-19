@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH VACCINE</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
            <div class="table table-striped projects">
        <a class="btn btn-primary" href="{{route('vaccine.add')}}">
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
                    <th>Loại</th>
                    <th>Tên Vaccine</th>
                    <th>Nguồn Gốc</th>
                    <th>Nhà Cung Cấp</th>
                    <th>Giá Nhập</th>
                    <th>Giá Xuất</th>
                    <th>Ngày Sản Xuất</th>
                    <th>Hạn Sử Dụng</th>
                    <th>Số Lượng</th>
                    <th style="width: 15%;text-align:center">Thao Tác</th>
                  </tr>
              </thead>
              <tbody>
              @php
                $index = 1;
              @endphp
                  @foreach($vaccine as $row)
                        <td>{{$index++}}</td>
                        <td><image width='50px' height='50px' src="{{URL::to($row->image)}}"/></td>
                        <td>{{$row->type->name}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->source}}</td>
                        <td>{{$row->supplier->symbol}}</td>
                        <td>{{$row->price_in}}</td>
                        <td>{{$row->price_out}}</td>
                        <td>{{$row->date_of_manufacture}}</td>
                        <td>{{$row->expiry_date}}</td>
                        <td>{{$row->quantity}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm"  href="{{route('vaccine.edit',['id'=>$row->id])}}" >
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{URL::to('admin/vaccine/delete/'.$row->id)}}" >
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
