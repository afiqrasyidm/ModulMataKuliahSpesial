@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Pembimbing TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Pengajuan Pembimbing TA</h2></center>
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
		     <label class="control-label col-sm-3">Judul</label>
		    <div class="col-sm-6">
		      <input class="form-control" placeholder="Masukan judul TA">
		    </div>
		  </div>

		  <div class="form-group">
		     <label class="control-label col-sm-3">Usulan Dosen Pembimbing</label>
		    <div class="col-sm-6">
		      <input class="form-control" placeholder="Masukan usulan dosen pembimbing">
		    </div>
		  </div>

		   <div class="form-group">
			  <label class="control-label col-sm-3">Latar Belakang:</label>
			  	<div class="col-sm-6">
			  		<textarea class="form-control" rows="5"></textarea>
				</div>
			</div>

		 

		  <center><button class="btn btn-primary">Ajukan TA</button></center>
	</form>
	
</div>
<div class="col-md-1">
</div>
@endsection