@extends('layouts.dash')

@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm Tiêu Chuẩn
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Điền thông tin tiêu chuẩn</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label>Cấp</label><small style="margin-left: 20px;">Điền ID: "1"-CSGD; "2"-CTĐT</small>
                  <input class="form-control" name="cap_id" placeholder="ID Cấp">
                </div>
                <div class="form-group">
                  <label>Tên Tiêu Chuẩn</label> <small style="margin-left: 20px;">Điền: Tiêu chuẩn 1</small>
                  <input class="form-control" name="tentieuchuan" placeholder="Tên tiêu chuẩn">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
