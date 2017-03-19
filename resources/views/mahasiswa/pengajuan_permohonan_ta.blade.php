@extends('layouts.layout_mahasiswa')


@section('title','Pengajuan Permohonan TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Pengajuan Permohonan TA</h2></center>
	<br/>

	<form class="form-horizontal">
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
		       <select class="form-control">
				  <option value="1">Skripsi</option>
				  <option value="2">Tesis</option>
				  <option value="3">Disertasi</option>
				</select>
		    </div>
		  </div>

		  <div class="form-group">
		     <label class="control-label col-sm-3">Jenis Bimbingan:</label>
		    <div class="col-sm-6">
		      <input class="form-control" placeholder="Masukan Jenis Bimbingan">
		    </div>
		  </div>

		  <br/>

		  <div class="form-group">
		    <label class="control-label col-sm-3">Judul:</label>
		    <div class="col-sm-6">
		      <input class="form-control" placeholder="Masukan Topik">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="control-label col-sm-3">Topik:</label>
		    <div class="col-sm-6">
		      <input class="form-control" placeholder="Masukan Judul">
		    </div>
		  </div>

		  <center><button class="btn btn-primary">Ajukan TA</button></center>
	</form>
	
</div>
<div class="col-md-1">
</div>
@endsection