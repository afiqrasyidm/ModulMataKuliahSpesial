@extends('layouts.layout')

@section('title','Pengajuan Topik TA')


@section('contentSideBar')
<ul class="sidebar-menu">
   
    <br>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ route('homepage/dosen')  }}">
      <i class="fa fa-dashboard"></i> <span>Kembali</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
  </li>
  
  
 @endsection



@section('mainContent')


<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
    </script>
<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Pengajuan Topik TA</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" action="" role="form">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Topik TA</label>
                      <input type="topik" class="form-control"  name="topik_ta">
                    </div>
                     <div class='col-sm-3'>
              
                  <?php echo $errors->first('topik_ta') ?>
                </div>
                    
                    <br>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Latar Belakang Pengajuan Topik TA</label>
                     <textarea class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="latar_belakang_ta" ></textarea>
                    </div>


                      <div class='col-sm-3'>
              
                        <?php echo $errors->first('latar_belakang_ta') ?>
                      </div>

           <button class="btn btn-block btn-primary" type="submit" >Ajukan Topik</button>
                   
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection

