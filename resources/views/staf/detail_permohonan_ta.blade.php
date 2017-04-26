@extends('layouts.layout_staf')

@section('title','Detail Permohonan TA')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
		<div style="width: 100%;"><a href="{{route('staf/verifikasi-permohonan-ta')}}">Kembali ke: Daftar Tugas Akhir</a></div>
		<br>
		<div class=".col-md-11">
			<div class="box box-primary">
				<div class="box-header with-border">
			        <center><h1 class="header-title">Detail Pengajuan Permohonan TA</h1></center>
				</div><!-- /.box-header -->
			    <div class="box-body">
					<br/>
					<table class="table table-bordered">
					    <tbody>
							<tr>
					          <th bgcolor="#86b7e3">Nama</th>
					          <td bgcolor="#c0c5cc">{{ $tugas_akhir->nama_mahasiswa }}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">NPM</th>
					          <td bgcolor="#c0c5cc">{{ $tugas_akhir->NPM }}</td>
					        </tr>
					       	<tr>
					          <th bgcolor="#86b7e3">Jurusan</th>
					          <td bgcolor="#c0c5cc">{{ $tugas_akhir->nama_prodi }}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Matakuliah</th>
					          <td bgcolor="#c0c5cc">
					          	@if ($tugas_akhir->jenjang=='S1')
					          		Skripsi
					          	@elseif($tugas_akhir->jenjang=='S2')
					          		Tesis
					          	@elseif($tugas_akhir->jenjang=='S3')
					          		Disertasi
					            @endif</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Topik</th>
					          <td bgcolor="#c0c5cc">{{$tugas_akhir->topik_ta }}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Judul</th>
					          <td bgcolor="#c0c5cc">{{$tugas_akhir->judul_ta}}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Deskripsi</th>
					          <td bgcolor="#c0c5cc">{{$tugas_akhir->deskripsi}}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Status</th>
					          <td bgcolor="#c0c5cc"><strong>{{$tugas_akhir->status}}</strong></td>
					        </tr>
					    </tbody>
					</table>
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection