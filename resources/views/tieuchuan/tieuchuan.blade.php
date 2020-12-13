@extends('layouts.dash')

@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Tiêu Chuẩn
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
              <th>ID Tiêu Chuẩn</th>
              <th>Tên Tiêu Chuẩn</th>
              <th>ID Cấp</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->cap_id}}</td>
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
@endsection
