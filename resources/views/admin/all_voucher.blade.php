@extends('admin.adminLayout')
@section('adminContent')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Danh mục voucher
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">              
          </div>
          <div class="col-sm-4">
          </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              <th>Mô tả voucher</th>
              <th>Phần trăm</th>
              <th>Giảm giá</th>
              <th>Ngày có hiệu lực</th>
              <th>HSD</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $all_voucher as $key => $cate_pro)
            <tr>
              <th style="width:20px;">
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              {{-- <td>0p<label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
              <td>{{ $cate_pro-> voucher_desc }}</td>
              <td>{{ $cate_pro-> percent }}</td>
              <td>{{ $cate_pro-> decrease }}</td>
              <td>{{ $cate_pro-> create_at }}</td>
              <td>{{ $cate_pro-> HSD }}</td>
              <td>
                <a href="{{ URL::to('/edit_voucher/'.$cate_pro ->id_voucher) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này?')" href="{{ URL::to('/delete_voucher/'.$cate_pro->id_voucher) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>  
              </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection