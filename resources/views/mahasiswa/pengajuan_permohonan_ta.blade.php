@extends('layouts.layout_mahasiswa')


@section('title','Pengajuan Permohonan TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	@if($tugas_akhir->status_tugas_akhir<1)
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

	@else
	<center><h2>Detail Pengajuan Permohonan TA</h2></center>
	<br/>
	<table class="table table-bordered">
	    <tbody>
			<tr>
	          <th bgcolor="#86b7e3">Nama</th>
	          <td bgcolor="#c0c5cc"><?php
                  echo $_SESSION["user_login"]->name;
                ?></td>
	        </tr>
	        <tr>
	          <th bgcolor="#86b7e3">NPM</th>
	          <td bgcolor="#c0c5cc"><?php
                  echo $_SESSION["user_login"]->npm;
                ?></td>
	        </tr>
	       	<tr>
	          <th bgcolor="#86b7e3">Jurusan</th>
	          <td bgcolor="#c0c5cc"><?php
                  echo $_SESSION["user_login"]->study_program;
                ?></td>
	        </tr>
	        <tr>
	          <th bgcolor="#86b7e3">Matakuliah</th>
	          <td bgcolor="#c0c5cc"><?php
		      		$jenjang = $_SESSION["mahasiswa"]->jenjang;
		      		if($jenjang=='S1') {
		      			echo 'Skripsi';
		      		} else if ($jenjang=='S2') {
		      			echo 'Tesis';
		      		} else if($jenjang=='S3') {
		      			echo 'Disertasi';
		      		}
	            ?></td>
	        </tr>
	        <tr>
	          <th bgcolor="#86b7e3">Topik</th>
	          <td bgcolor="#c0c5cc">{{ $topik }}</td>
	        </tr>
	        <tr>
	          <th bgcolor="#86b7e3">Judul</th>
	          <td bgcolor="#c0c5cc">{{$tugas_akhir->judul_ta}}</td>
	        </tr>
	        <tr>
	          <th bgcolor="#86b7e3">Status</th>
	          <td bgcolor="#c0c5cc">{{$tugas_akhir->status_tugas_akhir}}</td>
	        </tr>
	    </tbody>
	</table>

	<center><button class="btn btn-primary" type="submit">Ubah</button></center>

	@endif
	
</div>
<div class="col-md-1">
</div>
@endsection