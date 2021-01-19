@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH NHÀ CUNG CẤP</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table table-striped projects">
        <a class="btn btn-primary" href="{{route('supplier.add')}}">
            <i class="fas fa-plus-circle">
            </i>
            Thêm Mới
        </a>
        </div>
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên Nhà Cung Cấp</th>
                    <th>Ký Hiệu Công Ty</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th style="width: 15%;text-align:center">Thao Tác</th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach($supplier as $row)
                        <td>{{$index++}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->symbol}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->address}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm"  href="{{route('supplier.edit',['id'=>$row->id])}}" >
                              <i class="fas fa-pencil-alt">
                              </i>
                              Cập Nhật
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{URL::to('admin/supplier/delete/'.$row->id)}}" >
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
