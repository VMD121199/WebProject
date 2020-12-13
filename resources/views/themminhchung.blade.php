@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm Minh Chứng
      </h1>
      <br>
      {{ Session::get('message')}}
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Điền thông tin Minh Chứng</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="">
              {!! Form::open(['url' => '/minhchung/add','method'=>'post','role'=>'form']) !!}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="f-grid">
                <div class="form-group f-grid-col">
                  <label>Số hiệu</label>
                  <div class="control-group">
                    <input type="number" name="sohieu" data-form-field="number" placeholder="Chọn số" class="span8" min="1">
                  </div>
                </div>
                  <div class="form-group f-grid-col">
                    <label>ID Cấp</label><small style="margin-left: 20px;">1:"CSGD"; 2:"CTDT"</small>
                    <div class="control-group">
                    <select name="cap_id">
                      <option name="1" value="1">Cơ sở giáo dục</option>
                      <option name="2" value="2">Chương trình đào tạo </option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>ID Tiêu chuẩn</label>
                    <div class="control-group">
                    <select name="tieuchuan_id">
                      <?php
                        for ($i=1; $i<=36; $i++){
                          ?>
                          <option class="option" value="<?php echo $i;?>"><?php echo $i;?></option>
                          <?php
                        }
                      ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>ID Tiêu chí</label>
                    <div class="control-group kt">
                    <select name="tieuchi_id">
                      <?php
                        for ($i=1; $i<=161; $i++){
                          ?>
                          <option class="option" value="<?php echo $i;?>"><?php echo $i;?></option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>
                  </div>
                  </div>
                <div class="form-group">
                  <label>Tiêu Đề Minh Chứng</label>
                  <input type="text" class="form-control" name="tenminhchung" placeholder="Tên minh chứng">
                </div>
                <div class="form-group">
                  <label>Nơi ban hành</label>
                  <input type="text" class="form-control" name="noibanhanh" placeholder="Nơi ban hành">
                </div>
                <div class="form-group">
                  <label>Ngày ban hành</label>
                  <input type="date" class="span8" name="ngaybanhanh" data-form-field="category" data-placeholder="Select category">
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control noidung" rows="3" name="noidung" placeholder="Nhập nội dung ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Chọn File</label>
                  <input name="file" type="file" id="exampleInputFile">

                  <p class="help-block">Chọn file minh chứng của bạn.</p>
                </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm minh chứng này</button>
              </div>
            {!! Form::close() !!}
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
