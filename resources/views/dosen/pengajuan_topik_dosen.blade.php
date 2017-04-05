@extends('layouts.layout')

@section('title','Pengajuan Topik TA')


@section('contentSideBar')
<ul class="sidebar-menu">
   
    <br>
  <li class="header">MAIN NAVIGATION</li>
  
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/pengajuan-topik-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
	  <li><a href="{{ route('industri/pengajuan-topik-ta') }}"><i class="fa fa-angle-right"></i>Verifikasi Pengambilan Topik</a></li>
    </ul>
  </li>
  
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
<div class="col-md-1"></div>

<div class="col-md-11">
	<h2>Pengajuan Topik TA</h2>
	<br>

	<h4>     Usulan Topik dan Judul</h4>
    
	<br>

			<div class="box-body">
                    <form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
						
						  <label for="inputPassword3" class="col-sm-2 control-label">Topik TA</label>
						
								<div class="col-sm-8">
								
									<input type="topik" class="form-control" id="inputPassword3" placeholder="Topik TA" name="topik_ta">
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('topik_ta') ?>
								</div>
								
						</div>
	
						<div class="form-group">
						
						  <label for="inputPassword3" class="col-sm-2 control-label">Maksimal Pendaftar</label>
						
								<div class="col-sm-8">
								
									<input type="topik" class="form-control" id="inputPassword4" placeholder="Maksimal Pendaftar" name="maksimal_pendaftar">
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('topik_ta') ?>
								</div>
								
						</div>
						
						<div class="form-group">
						
						  <label class="col-sm-2 control-label">Latarbelakang Topik</label>
						
								<div class="col-sm-8">
								
									<textarea class="textarea"  placeholder="Latar belakang topik" style="width:100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="latar_belakang_ta" ></textarea>
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('latar_belakang_ta') ?>
								</div>
								
						</div>
		
						<center><button class="btn btn-primary" type="submit" >Ajukan Topik</button></center>	
					</form>
				</div>


</div>
@endsection