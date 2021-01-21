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
            <th>Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Tổng Tiền</th>
          </tr>
      </thead>
      <tbody>
        @php
            $index = 1;
        @endphp
        @foreach($result_order_detail as $row)
                <td>{{$index++}}</td>
                @if($row->id_vaccine)
                    <td>{{$row->vaccine->name}}</td>
                @else
                    <td>{{$row->package->name}}</td>
                @endif
                <td>{{$row->order_quantity}}</td>
                <td>{{$row->order_price}}</td>
            </tr>
            </tr>
            @endforeach
      </tbody>
  </table>
</div>
@endsection
