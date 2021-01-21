@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">DANH SÁCH ĐƠN ĐẶT HÀNG</h1>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
  <table class="table table-striped projects">
      <thead>
          <tr>
            <th>STT</th>
            <th>Trung Tâm</th>
            <th>Người Đặt Hàng</th>
            <th>Người Hưởng Thụ</th>
            <th>Tổng Tiền</th>
            <th>Trạng Thái</th>
            <th style="width: 15%;text-align:center">#</th>
          </tr>
      </thead>
      <tbody>
        @php
            $index = 1;
        @endphp
        @foreach($result_order as $row)
                <td>{{$index++}}</td>
                <td>{{$row->name_center}}</td>
                <td>{{$row->customer_name}}</td>
                <td>{{$row->name_client}}</td>
                <td>{{$row->order_total}}</td>
                <td>{{$row->order_status}}</td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="{{route('order.detail',['id'=>$row->order_id])}}">
                    <i class="fas fa-folder"></i>
                    Chi Tiết</a>
              </td>
            </tr>
            </tr>
            @endforeach
      </tbody>
  </table>
</div>
@endsection
