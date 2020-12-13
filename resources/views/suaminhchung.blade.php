@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa Minh Chứng
      </h1>
      <br>
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
              {!! Form::open(['url' => '/minhchung/edit','method'=>'post','name'=>'editForm','role'=>'form']) !!}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="f-grid">
                <div class="form-group f-grid-col">
                  <label>Số hiệu</label>
                  <div class="control-group">
                    <input type="number" value="{{$minhchung->sohieu}}" name="sohieu" data-form-field="number" placeholder="Chọn số" class="span8"  min="1">
                  </div>
                </div>
                  <div class="form-group f-grid-col">
                    <label>Cấp</label>
                    <div class="control-group">
                    <select name="cap_id" value="{{$minhchung->cap_id}}">
                      <option name="1" value="1">Cơ sở giáo dục</option>
                      <option name="2" value="0">Chương trình đào tạo </option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>ID Tiêu chuẩn</label>
                    <div class="control-group">
                    <select name="tieuchuan_id" value="{{$minhchung->tieuchuan_id}}">
                      <?php
                        for ($i=1; $i<=36; $i++){
                          ?>
                          <option class="option" value="{{$minhchung-><?php echo $i;?>}}"><?php echo $i;?></option>
                          <?php
                        }
                      ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>ID Tiêu chí</label>
                    <div class="control-group kt">
                    <select name="tieuchi_id" value="{{$minhchung->tieuchi_id}}">
                      <?php
                        for ($i=1; $i<=161; $i++){
                          ?>
                          <option class="option" value="{{$minhchung-><?php echo $i;?>}}"><?php echo $i;?></option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>
                  </div>
                  </div>
                <div class="form-group">
                  <label>Tiêu Đề Minh Chứng</label>
                  <input type="text" class="form-control" name="tenminhchung" value="{{$minhchung->tenminhchung}}" placeholder="Tên minh chứng">
                </div>
                <div class="form-group">
                  <label>Nơi ban hành</label>
                  <input type="text" class="form-control" name="noibanhanh" value="{{$minhchung->noibanhanh}}" placeholder="Nơi ban hành">
                </div>
                <div class="form-group">
                  <label>Ngày ban hành</label>
                  <input type="date" class="span8" name="ngaybanhanh" value="{{$minhchung->ngaybanhanh}}" data-form-field="category" data-placeholder="Select category">
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control noidung" rows="3" name="noidung" value="{{$minhchung->noidung}}" placeholder="Nhập nội dung ...">{{$minhchung->noidung}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Chọn File</label>
                  <input name="file" type="file" value="file" id="exampleInputFile">

                  <p class="help-block">Chọn file minh chứng của bạn.</p>
                </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cập nhật minh chứng</button>
              </div>
            {!! Form::close() !!}
          </div>
          <script type="text/javascript">
            document.forms['editForm'].elements['cap_id'].value='{{ $minhchung->cap_id }}'
          </script>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
