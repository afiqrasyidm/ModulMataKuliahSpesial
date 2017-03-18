@extends('layouts.layout_staf')

@section('title','Post Pengumuman')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Post Pengumuman</h2></center>
	<br/>
	<br/>

	<form class="form-horizontal">
		 <div class="form-group">
		     <label class="control-label col-sm-3">Kirim Ke: </label>
		    <div class="col-sm-2">
		       <select class="form-control">
				  <option value="1">Semua Stakeholder</option>
				  <option value="2">Mahasiswa</option>
				  <option value="3">Dosen Pembimbing</option>
				  <option value="4">Dosen Penguji</option>
				  <option value="5">PA</option>
				</select>
		    </div>
		  </div>

		   <div class="form-group">
		     <label class="control-label col-sm-3">Pengumuman: </label>
		    <div class="col-sm-8">
			  		<textarea class="form-control" rows="10"></textarea>
				</div>
			</div>

		
		  <center><button class="btn btn-primary">Submit</button></center>
	</form>
	
</div>
<div class="col-md-1">
</div>
@endsection