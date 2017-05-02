@extends('layouts.layout_industri')

@section('title','Pengajuan TA')

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
			  
	<?php
if (isset($_SESSION["industri_pengajuan_topik"])) {
	
			echo"
			<div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Pengajuan Topik Berhasil
                   
              </div>
			";
			
			
			unset($_SESSION["industri_pengajuan_topik"]);
}
?>


    <div class="box box-primary">
        <div class="box-header with-border">
            <center><h1 class="header-title">Pengajuan Topik TA</h1><br></center>
         </div><!-- /.box-header -->

      <div class="box-body">
                    <form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
						
						  <label for="inputPassword3" class="col-sm-3 control-label">Topik TA</label>
						
								<div class="col-sm-8">
								
									<input type="topik" class="form-control" id="inputPassword3" placeholder="Topik TA" name="topik_ta">
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('topik_ta') ?>
								</div>
								
						</div>
	
						<div class="form-group">
						
						  <label for="inputPassword3" class="col-sm-3 control-label">Maksimal Pendaftar</label>
						
								<div class="col-sm-8">
								
									<input type="topik" class="form-control" id="inputPassword4" placeholder="Maksimal Pendaftar" name="maksimal_pendaftar">
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('topik_ta') ?>
								</div>
								
						</div>
						
						<div class="form-group">
						
						  <label class="col-sm-3 control-label">Latar Belakang Topik</label>
						
								<div class="col-sm-8">
								
									<textarea class="textarea"  placeholder="Latar belakang topik" style="width:100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="latar_belakang_ta" ></textarea>
								
								</div>
								 <div class='col-sm-3'>
							
									<?php echo $errors->first('latar_belakang_ta') ?>
								</div>
								
						</div>
		

            <div class="box-footer">
              <center><button class="btn btn-primary" type="submit" >Ajukan Topik</button></center>
            </div>
          </form>
        </div>

    </div><!-- /.box -->
</div>
</div><!--/.col (right) -->


</section>

@endsection

