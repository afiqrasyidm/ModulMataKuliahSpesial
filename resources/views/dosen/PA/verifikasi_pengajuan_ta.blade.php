@extends('layouts.layout_dosen_pa')

@section('title','Verifikasi Pengajuan Tugas Akhir')

@section('mainContent')
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
				<th>Detail</th>
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
						<a href="/dosen/PA/detail-permohonan-ta/{{$ta->id_tugas_akhir}}"><button  class="btn btn-primary">Detail</button></a>
					@elseif($ta->status_tugas_akhir == 2)
						<p style="color:red;"><b>TA Ditolak</b></p>
					@elseif($ta->status_tugas_akhir > 6)
						<p><b>TA Disetujui</b></p>
					@endif
				</td>
			</tr>
		 	@endforeach
		</tbody>
	</table>
	<br/>
</div>

@endsection