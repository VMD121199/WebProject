@extends('layouts.dash')
@section('section')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Minh Chứng
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="invoice">

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID Minh Chứng</th>
              <th>Tên Minh Chứng</th>
              <th>Nơi Ban Hành</th>
              <th>Ngày Ban Hành</th>
              <th>Số Hiệu</th>
              <th>ID Tiêu Chí</th>
              <th>ID Tiêu Chuẩn</th>
              <th>ID Cấp</th>
              <th>Nội Dung</th>
              <th>File</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tenminhchung}}</td>
                <td>{{$row->noibanhanh}}</td>
                <td>{{$row->ngaybanhanh}}</td>
                <td>{{$row->sohieu}}</td>
                <td>{{$row->tieuchi_id}}</td>
                <td>{{$row->tieuchuan_id}}</td>
                <td>{{$row->cap_id}}</td>
                <td>{{$row->noidung}}</td>
                <td>{{$row->file}}</td>
                <td>
                  <a href="{{ url('/suaminhchung')}}/{{$row->id}}" class="glyphicon glyphicon-edit">Sửa</a>
                </td>
                <td>  <a href="{{ url('/xoaminhchung')}}/{{$row->id}}" onclick="return  confirm(' Bạn có chắc muốn xóa minh chứng này chứ!')" class="glyphicon glyphicon-remove">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  @stop