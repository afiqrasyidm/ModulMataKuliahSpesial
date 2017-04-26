@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Permohonan TA')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
		<div class=".col-md-11">
			<div class="box box-primary">  
				<div class="box-header with-border">
		        	<center><h1 class="header-title">Detail Pengajuan Permohonan TA</h1></center>
				</div><!-- /.box-header -->  
				<div class="box-body">
					<br/>
					<form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <div class="form-group">
						    <label class="control-label col-sm-3">Nama :</label>
						    <div class="col-sm-6">
						      <input class="form-control" value="<?php
				                  echo $_SESSION["user_login"]->name;
				                ?>" disabled>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-3">NPM :</label>
						    <div class="col-sm-6">
						      <input class="form-control" value="<?php
				                  echo $_SESSION["user_login"]->npm;
				                ?>" disabled>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-3">Jurusan :</label>
						    <div class="col-sm-6">
						      <input class="form-control" value="<?php
				                  echo $_SESSION["user_login"]->study_program;
				                ?>" disabled>
						    </div>
						  </div>

						  <br/>

						  <div class="form-group">
						    <label class="control-label col-sm-3">Mata Kuliah :</label>
						    <div class="col-sm-6">
						      	<input class="form-control" value="<?php
						      		$jenjang = $_SESSION["mahasiswa"]->jenjang;
						      		if($jenjang=='S1') {
						      			echo 'Skripsi';
						      		} else if ($jenjang=='S2') {
						      			echo 'Tesis';
						      		} else if($jenjang=='S3') {
						      			echo 'Disertasi';
						      		}
					              
					            ?>" disabled>
						    </div>
						  </div>

						  <br/>

						  <div class="form-group">
						    <label class="control-label col-sm-3">Topik :</label>
						    <div class="col-sm-6">
						    	<?php echo $errors->first('username') ?>
						      	<input class="form-control" value="{{ $topik }}" disabled>
						    </div>
						  </div>

						  <div class="form-group">
						    <label class="control-label col-sm-3">Judul :</label>
						    <div class="col-sm-6">
						      <input class="form-control" name="judul_ta" placeholder="Masukan Judul">
						    </div>
						  </div>

						  <div class="box-footer">
						  <br>
						  <center><button class="btn btn-primary" type="submit">Ajukan TA</button></center>
						  </div>
					</form>

					@if(count($komentars)>0)
						<hr>
						<div class="col-md-1"></div>
						<div class="col-md-11"><strong>Daftar Komentar:</strong></div>
						<br>
						<br>
						<table style="width:100%;">
							@foreach($komentars as $komentar)
								@if($komentar->role=='dosen')
								<tr>
									<td>
										<div class="col-md-1">
										</div>
										<div class="col-md-2">
											{{$komentar->nama_dosen}}
											<br>
											8 Maret 2017
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px;">
												{{$komentar->komentar}}
											</div>
										</div>
										<div class="col-md-1"></div>
									</td>
								</tr>
								@else
								<tr>
									<td>
										<div class="col-md-1"></div>
										<div class="col-md-2">
											{{$komentar->nama_mahasiswa}}
											<br>
											8 Maret 2017
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px; margin-left: 25px; border-top-color: #222d32;">
												{{$komentar->komentar}}
											</div>
										</div>
										<div class="col-md-1"></div>
									</td>
								</tr>
								@endif
							@endforeach
						</table>
					@endif
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection