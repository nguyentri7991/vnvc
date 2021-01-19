@extends ('admin.master')

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0 text-dark">THÊM GÓI VACCINE</h1>
            </div>
        </div>
    </div>
<div class="card card-primary">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('package.index')}}">
        <i class="fas fa-arrow-circle-left">
        </i>
            Trở Lại
        </a>
  </div>
  <form role="form" action="{{route('package.handleInsert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div style="float:left;width:30%;">
            <div class="form-group">
                <label for="exampleInputEmail1">Loại Gói</label>
                    <select id="id_type" class="form-control" name="type">
                            @foreach($type as $type)
                                <option value='{{$type ->id}}'>{{$type->name}} </option>
                            @endforeach
                        </select>
                </div>
            <div class="form-group">
                <label for="formFileSm" class="form-label">Hình ảnh đại diện</label>
                <input class="form-control-sm" id="image" name='image' type="file">
                </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Tên Gói</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên Vaccine">
                    </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Số Lượng Vaccine</label>
                    <input type="text" class="form-control" id="quantity_vaccine" name="quantity_vaccine" placeholder="Số Lượng Vaccine">
                    </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Giá Tiền">
                    </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Giảm Giá</label>
                    <input type="text" class="form-control" id="saleOff" name="saleOff" placeholder="Giảm Giá">
                    </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Ghi Chú</label>
                    <input type="text" class="form-control" id="note" name="note" placeholder="Ghi Ch">
                    </div>
            </div>
        <div style="float:right;width:65%;">
            <h3 for="exampleInputEmail1">CHI TIẾT GÓI TIÊM</h3>
            <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th style="width:400px">Phòng Ngừa</th>
                    <th style="width:200px">Tên Vaccine</th>
                    <th style="width:100px">Số Lượng Liều</th>
                    <th><a href="javascritp:;" class="btn btn-info addRow">+</a></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>
                        <select id="id_prevention" name="prevention[]" class="form-control" style="width:400px" >
                            @foreach($prevention as $p_item)
                                <option value='{{$p_item ->id}}'>{{$p_item->name}} </option>
                            @endforeach
                            </select>
                        </td>
                    <td >
                        <select id="id_vaccine" name="vaccine[]" class="form-control" style="width:150px" >
                            @foreach($vaccine as $v_item)
                                <option value='{{$v_item ->id}}'>{{$v_item->name}} </option>
                            @endforeach
                            </select>
                        </td>
                    <td>
                        <input type="text" class="form-control" id="number_of_doses" name="number_of_doses[]" style="width:100px">
                        </td>
                    <td>
                        <a href="javascritp:;" class="btn btn-danger deleteRow">-</a>
                        </td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </div>
  </form>
</div>

<script type="text/javascript">
    $('thead').on('click','.addRow',function() {
        var tr ='<tr>'+
                    '<td>'+
                        '<select id="id_prevention" class="form-control" name="prevention[]" style="width:400px">'+
                            '@foreach($prevention as $p_item)'+
                                '<option value="{{$p_item ->id}}">{{$p_item->name}} </option>'+
                            '@endforeach'+
                            '</select>'+
                        '</td>'+
                    '<td >'+
                        '<select id="id_vaccine" class="form-control" name="vaccine[]" style="width:150px">'+
                            '@foreach($vaccine as $v_item)'+
                                '<option value="{{$v_item ->id}}">{{$v_item->name}} </option>'+
                            '@endforeach'+
                            '</select>'+
                        '</td>'+
                    '<td>'+
                        '<input type="text" class="form-control" id="number_of_doses" name="number_of_doses[]" style="width:100px">'+
                        '</td>'+
                    '<td>'+
                        '<a href="javascript:;" class="btn btn-danger deleteRow">-</a>'+
                        '</td>'+
                  '</tr>';
        $('tbody').append(tr);
    });
    $('tbody').on('click','.deleteRow',function() {
        $(this).parent().parent().remove();
    });
</script>
@endsection
