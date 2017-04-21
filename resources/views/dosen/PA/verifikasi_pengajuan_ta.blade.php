@extends('layouts.layout_dosen_pa')

@section('title','Verifikasi Pengajuan Tugas Akhir')

@section('mainContent')
<div id="myModal" class="modal fade" role="dialog">
  	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
	  		<div class="modal-header">
				<center><h4>PERSETUJUAN</h4></center>
	  		</div>
	  		<form method="post" action="">
	  			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  		<div class="modal-body">
					<label class="col-sm-2 control-label">Komentar</label>
					<textarea class="textarea" style="width:100%; height: 200px; line-height: 18px; border: 2px solid #dddddd;" name="feedback"></textarea>
				</div>
		  		<div class="modal-footer">
					<button class="btn btn-primary" type="submit" name="action" value="Setujui">Setujui</button>
					<button class="btn btn-danger" type="submit" name="action" value="Tolak">Tolak</button>
		  		</div>
		  	</form>
		</div>
	</div>
</div>

<div class="col-md-12">
	<br>
	<br>
	<br>
  	<div class="box box-primary">
    	<div class="box-header with-border">
      		<center><h1 class="header-title">Verifikasi Permohonan Tugas Akhir</h1><br></center>
    	</div><!-- /.box-header -->
    <div class="box-body">
	<table class="table table-striped">
		<thead>
		  	<tr>
				<th>Nama Mahasiswa</th>
				<th>NPM</th>
				<th>Jurusan</th>
				<th>Matakuliah</th>
				<th>Topik</th>
				<th>Judul</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>						
		  	@foreach ($tugas_akhir as $ta)
			<tr>
		  		<td>{{$ta->nama_mahasiswa}}</td>
		 		<td>{{$ta->NPM}}</td>
		 		<td>{{$ta->nama_prodi}}</td>
		 		<td>
		 			@if($ta->jenjang=='S1')
		 				Skripsi
		 			@elseif($ta->jenjang=='S2')
		 				Tesis
		 			@elseif($ta->jenjang=='S3')
		 				Disertasi
		 			@endif
		 		</td>
		 		<td>{{$ta->topik_ta}}</td>
		 		<td>{{$ta->judul_ta}}</td>
				<td> 
					@if($ta->status_tugas_akhir == 6)
						<a data-toggle="modal" data-target="#myModal"><button  class="btn btn-primary">Persetujuan</button></a>
					@elseif($ta->status_tugas_akhir == 2)
						<p style="color:red;"><b>Topik Tidak Setujui</b></p>
					@else
						<p><b>Topik Disetujui</b></p>
					@endif
				</td>
			</tr>
		 	@endforeach
		</tbody>
	</table>
	<br/>
</div>

@endsection