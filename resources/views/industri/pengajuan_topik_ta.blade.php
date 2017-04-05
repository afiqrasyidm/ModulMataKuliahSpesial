@extends('layouts.layout_industri')

@section('title','Pengajuan TA')

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

