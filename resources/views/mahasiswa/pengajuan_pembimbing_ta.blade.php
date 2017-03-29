@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Pembimbing TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	@if(isset($dosenpembimbing))

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
			<form>
				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Nama Dosen</th>
				        <th>Minat</th>
				      </tr>
				    </thead>
				    <tbody>

				@foreach ($dosenpembimbing as $dosenpembimbing)

				<tr>
					<td>

						{{$dosenpembimbing->nama_dosen}}

					</td>

					<td>
						{{$dosenpembimbing->interest}}
					</td>
				</tr>


				@endforeach

			</tbody>
		</table>
  		<p><i>*Pilih salah satu</i></p>

			<center>
				<button class="btn btn-primary">Ajukan Dosen Pembimbing</button></center>
		</form>


		@else
				<section class="content">
				<h3> belom dibuat</h3>
			</section>

		@endif

</div>
<div class="col-md-1">
</div>
@endsection
