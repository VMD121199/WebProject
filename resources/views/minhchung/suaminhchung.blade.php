@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa Minh Chứng
      </h1>
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
            <form method="post" action="" name="editForm">
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
                    <label>Cấp</label><small style="margin-left: 20px;">1:"CSGD"; 2:"CTDT"</small>
                    <div class="control-group">
                    <select name="cap_id">
                      <option name="1" value="{{$minhchung->cap_id}}">{{$minhchung->cap_id}}</option>
                        <option name="1" value="1">Cơ sở giáo dục</option>
                      <option name="2" value="2">Chương trình đào tạo </option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>ID Tiêu chuẩn</label>
                    <div class="control-group">
                    <select name="tieuchuan_id" value="{{$minhchung->tieuchuan_id}}">
                      <option class="option">{{$minhchung->tieuchuan_id}}</option> 
                        <?php
                        for ($i=1; $i<=36; $i++){
                          ?>
                          <option class="option" value="<?php echo $i;?>">Tiêu chuẩn <?php echo $i;?></option>
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
                          <option class="option">{{$minhchung->tieuchi_id}}</option>
                          <?php
                        for ($i=1; $i<=161; $i++){
                          ?>
                          <option class="option" value="<?php echo $i;?>">Tiêu chí <?php echo $i;?></option>
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
                  <label>Ngày ban hành:</label>
                  <input name="ngaybanhanh" value="{{$minhchung->ngaybanhanh}}" style="margin-left: 20px; "> 
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control noidung" rows="3" name="noidung" value="{{$minhchung->noidung}}" placeholder="Nhập nội dung ...">{{$minhchung->noidung}}</textarea>
                </div>
                <div class="form-group">
                  <label type="file"> File hiện tại: {{$minhchung->file}}</label><br>
                  <label for="exampleInputFile">Chọn File thay thế</label>
                  <input name="file" type="file" id="exampleInputFile">

                  <p class="help-block">Chọn file minh chứng của bạn.</p>
                </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cập nhật minh chứng</button>
              </div>
           </form>
         
          <script type="text/javascript">
            document.forms['editForm'].elements['cap_id'].value='{{ $minhchung->cap_id }}'
          </script>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
