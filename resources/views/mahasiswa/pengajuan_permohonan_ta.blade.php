@extends('layouts.layout_mahasiswa')


@section('title','Pengajuan Permohonan TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Pengajuan Permohonan TA</h2></center>
	<br/>

	<form class="form-horizontal" method="post" action="">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label class="control-label col-sm-3">Nama:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="<?php
                  echo $_SESSION["user_login"]->name;
                ?>" disabled>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-3">NPM:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="<?php
                  echo $_SESSION["user_login"]->npm;
                ?>" disabled>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-3">Jurusan:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="<?php
                  echo $_SESSION["user_login"]->study_program;
                ?>" disabled>
		    </div>
		  </div>

		  <br/>

		  <div class="form-group">
		    <label class="control-label col-sm-3">Mata Kuliah</label>
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
		    <label class="control-label col-sm-3">Topik:</label>
		    <div class="col-sm-6">
		    	<?php echo $errors->first('username') ?>
		      	<input class="form-control" value="{{ $topik }}" disabled>
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="control-label col-sm-3">Judul:</label>
		    <div class="col-sm-6">
		      <input class="form-control" name="judul_ta" placeholder="Masukan Judul">
		    </div>
		  </div>

		  <center><button class="btn btn-primary" type="submit">Ajukan TA</button></center>
	</form>
	
</div>
<div class="col-md-1">
</div>
@endsection