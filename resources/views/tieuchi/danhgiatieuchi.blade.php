@extends('layouts.dash')
@section('section')
  <!-- <link rel="stylesheet" type="text/css" href="danhgia.css"> -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Đánh giá Tiêu chí
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Điền thông tin Minh Chứng</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="f-grid">
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
                <!-- <div class="form-group">
                  <label>Tiêu Đề Minh Chứng</label>
                  <input type="text" class="form-control" name="tenminhchung" placeholder="Tên minh chứng">
                </div> -->
                <div class="f-grid">
                  <div class="form-group f-grid-col">
                    <label>Mô tả hiện trạng</label>
                    <div class="control-group">
                    <textarea rows="9" cols="90" name="mota" form="usrform"> </textarea>
                    </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>Minh chứng</label>
                    <div class="test">
                   
                    <!-- <input type="checkbox" id="sumang" name="sumang" value="Sứ mạng và mục tiêu của trường đại học">
                    <label for="sumang"> Sứ mạng và mục tiêu của trường đại học </label><br>
                    <input type="checkbox" id="tochuc" name="tochuc" value="Tổ chức và quản lý">
                    <label for="tochuc"> Tổ chức và quản lý</label><br>
                    <input type="checkbox" id="quantri" name="quantri" value="Quản trị">
                    <label for="quantri"> Quản trị </label><br>
                    <input type="checkbox" id="quantrichienluoc" name="quantrichienluoc" value="Quản trị">
                    <label for="quantrichienluoc"> Quản trị chiến lược</label><br>
                    <input type="checkbox" id="quantrichienluoc" name="quantrichienluoc" value="Quản trị">
                    <label for="quantrichienluoc"> Quản trị chiến lược</label><br>
                    <input type="checkbox" id="quantrichienluoc" name="quantrichienluoc" value="Quản trị">
                    <label for="quantrichienluoc"> Quản trị chiến lược</label><br>
                    <input type="checkbox" id="quantrichienluoc" name="quantrichienluoc" value="Quản trị">
                    <label for="quantrichienluoc"> Quản trị chiến lược</label><br> -->
              

                    </div>
                  </div>
                  </div>




                <!-- <div class="page">
                    <div class="box">
                        <div class="area">
                            <div class="define">
                                <header>Mô tả hiện trạng</header>
                                <div class="text-box">
                                    <textarea aria-label="" id="text_area"></textarea>
                                </div>
                            </div>
                            <div class="chosen">
                                <header> Sở thích </header>
                                <input type="checkbox" id="sumang" name="sumang" value="Sứ mạng và mục tiêu của trường đại học">
                                <label for="sumang"> Sứ mạng và mục tiêu của trường đại học </label><br>
                                <input type="checkbox" id="tochuc" name="tochuc" value="Tổ chức và quản lý">
                                <label for="dacau"> Tổ chức và quản lý</label><br>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="form-group">
                  <input type="checkbox"  name="danhgia" value="Đạt"> Đạt
                </div>
                
                <div class="form-group">
                  <label>Ngày ký</label>
                  <input type="date" class="span8" name="ngayky" data-form-field="category" data-placeholder="Select category">
                </div>
                <div class="form-group">
                  <label>Người ký</label>
                  <input type="text" class="form-control" name="nguoiky" placeholder="Nhập tên người ký...">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">Chọn File</label>
                  <input name="file" type="file" id="exampleInputFile">

                  <p class="help-block">Chọn file minh chứng của bạn.</p>
                </div> -->
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Đánh giá</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
