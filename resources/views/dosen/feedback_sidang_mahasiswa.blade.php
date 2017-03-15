@extends('layouts.layout_dosen')

@section('title','Feedback Sidang Mahasiswa XYZ')

@section('mainContent')       

<div class="col-md-1">
</div>
<div class="col-md-10">
	<center><h2>Feedback Sidang</h2></center>
	<br/>
<form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-3">Mahasiswa:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Mahasiswa XYZ" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3">Judul TA: </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Judul TA ABCD" disabled>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-3">Dosen Pembimbing: </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Dosen RST" disabled>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-3">Tanggal Sidang </label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Senin 12 Maret 2017" disabled>
    </div>
  </div>
  <br><br><br>
  <div class="form-group">
    <label>Tanggapan</label>
    <textarea class="form-control" rows="7" placeholder="Enter ..."></textarea>
  </div>
	
	<center><button class="btn btn-primary">Beri Tanggapan</button></center>
</form>	
</div>
<div class="col-md-1">
</div>

@endsection